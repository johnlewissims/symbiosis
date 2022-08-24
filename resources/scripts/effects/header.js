import * as THREE from 'three';
import * as dat from 'dat.gui';

// Loading
const textureLoader = new THREE.TextureLoader();

const normalTexture = textureLoader.load('https://i.imgur.com/omE29Ki.jpg');

// const gui = new dat.GUI();

const canvas = document.querySelector('canvas.webgl');

const vertexShader = 'varying vec2 vUv;void main(){vUv = uv;vec4 mvPosition = modelViewMatrix * vec4( position, 1.0 );gl_Position = projectionMatrix * mvPosition;}';

const fragmentShader = `

varying vec2 vUv;


uniform float time;
uniform sampler2D mainTex;

float hash21(vec2 v) {
    return fract(sin(dot(v, vec2(12.9898, 78.233))) * 4.5453123);
}

float noise(vec2 uv) {
	vec2 f = fract(uv);
	vec2 i = floor(uv);
	f = f * f * (3. - 2. * f);
	return mix(
		mix(hash21(i), hash21(i + vec2(1,0)), f.x),
		mix(hash21(i + vec2(0,1)), hash21(i + vec2(1,1)), f.x), f.y);
}


vec3 hsv(float h, float s, float v)
{
  return mix( vec3( 1.0 ), clamp( ( abs( fract(
    h + vec3( 3.0, 2.0, 1.0 ) / 3.0 ) * 6.0 - 3.0 ) - 1.0 ), 0.0, 1.0 ), s ) * v;
}


float fbm(vec2 uv) {
	float freq = 2.;
	float amp = .5;
	float gain = .54;
	float v = 0.;
	for(int i = 0; i < 6; ++i) {
    
    float a = float(i) / 6.;
    a *= 6.28;
		v += amp * noise(uv + vec2( sin(a) , -cos(a)) * time);// float();
		amp *= gain;
		uv *= freq;
	}
	return v;
}

void main()
{
    // Normalized pixel coordinates (from 0 to 1)
    vec2 uv = vUv;
    
    
    float n = fbm( uv * 10. );   
    float n2 = fbm( (uv+1000.)* 10. );
    
    
    vec2 fUV = uv * .8 + .1;
    fUV.x += n * .1;
    fUV.y += n2 * .1;
    fUV = clamp( fUV , vec2(0.) , vec2(1.));
    
    vec4 c = texture2D( mainTex , fUV);
    
    // vec4 c = texture2D( mainTex , vec2( fUV.x + n *  .1 , fUV.y + n2 *.1));

    // vec2( fUV.x + n *  .1 , fUV.y + n2 *.1));
    //vec4 c = vec4(hsv( n , 1.,1.),1.);

    // Time varying pixel color
    vec3 col = c.xyz;//hsv( c.r, 1.,1.);// 0.5 + 0.5*cos(time+uv.xyx+vec3(0,2,4));

    // Output to screen
    gl_FragColor = vec4(col,1.0);
}`;

if(canvas) {
    const scene = new THREE.Scene();

    // Object
    const geometry = new THREE.PlaneGeometry(6,6);
    
    let uniforms = {
        time: { value: 1.0 },
        mainTex: { value: normalTexture }
    };
    
    const material = new THREE.ShaderMaterial({

        uniforms: uniforms,
        vertexShader: vertexShader,
        fragmentShader: fragmentShader

    });

    material.metalness = 0.7;
    material.roughness = 0.7;
    material.normalMap = normalTexture;
    material.color = new THREE.Color(0xcdcdcd);
    
    const sphere = new THREE.Mesh(geometry, material);
    scene.add(sphere);
    
    const sizes = {
        width: window.innerWidth,
        height: window.innerHeight
    }
    
    window.addEventListener('resize', () => {
        sizes.width = window.innerWidth;
        sizes.height = window.innerHeight;
    
        camera.aspect = sizes.width / sizes.height
        camera.updateProjectionMatrix()
    
        renderer.setSize(sizes.width, sizes.height)
        renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2))
    })
    
    const camera = new THREE.PerspectiveCamera(75, sizes.width / sizes.height, 0.1, 100)
    camera.position.x = 0
    camera.position.y = 0
    camera.position.z = 2
    scene.add(camera)
    
    const renderer = new THREE.WebGLRenderer({
        canvas: canvas,
        alpha: true
    })
    renderer.setSize(sizes.width, sizes.height)
    renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2))
    
    // Interactive
    let onDocumentMouseMove = (event) => {
        mouseX = (event.clientX - windowHalfX)
        mouseY = (event.clientY - windowHalfY)
    }
    
    document.addEventListener('mousemove', onDocumentMouseMove)
    
    let mouseX = 0
    let mouseY = 0
    
    let targetX = 0
    let targetY = 0
    
    const windowHalfX = window.innerWidth / 2
    const windowHalfY = window.innerHeight / 2
    
    const clock = new THREE.Clock()
    const tick = () =>
    {
        targetX = mouseX * .001
        targetY = mouseY * .001
    
        const elapsedTime = clock.getElapsedTime()
        uniforms.time.value = elapsedTime;
        // sphere.rotation.y = .5 * elapsedTime
    
        // sphere.rotation.y += .5 * (targetX - sphere.rotation.y);
        // sphere.rotation.x += .05 * (targetY - sphere.rotation.x);
        // sphere.rotation.z += -.05 * (targetY - sphere.rotation.x);
    
        // controls.update()
    
        renderer.render(scene, camera)
    
        window.requestAnimationFrame(tick)
    }
    
    tick()
}