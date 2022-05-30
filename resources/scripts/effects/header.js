import * as THREE from 'three';
import * as dat from 'dat.gui';

// Loading
const textureLoader = new THREE.TextureLoader();

const normalTexture = textureLoader.load('http://symbiosis.local/wp-content/uploads/2022/04/golfball.png');

// const gui = new dat.GUI();

const canvas = document.querySelector('canvas.webgl');

if(canvas) {
    const scene = new THREE.Scene();

    // Object
    const geometry = new THREE.SphereBufferGeometry(.5, 64, 64 );
    
    const material = new THREE.MeshStandardMaterial();
    material.metalness = 0.7;
    material.roughness = 0.7;
    material.normalMap = normalTexture;
    material.color = new THREE.Color(0xcdcdcd);
    
    const sphere = new THREE.Mesh(geometry, material);
    scene.add(sphere);
    
    const pointlight = new THREE.PointLight(0xFFFFFF, 0.2);
    pointlight.position.set(-7,-7,0.5);
    scene.add(pointlight);
    
    const pointlight2 = new THREE.PointLight(0xff0000, 1);
    pointlight2.position.set(1,1,1);
    pointlight2.intensity = 1;
    
    // gui.add(pointlight2.position, 'y');
    // gui.add(pointlight2.position, 'x');
    // gui.add(pointlight2.position, 'z');
    // gui.add(pointlight2, 'intensity');
    
    // gui.add(pointlight.position, 'y');
    // gui.add(pointlight.position, 'x');
    // gui.add(pointlight.position, 'z');
    // gui.add(pointlight, 'intensity');
    
    scene.add(pointlight2);
    
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
        sphere.rotation.y = .5 * elapsedTime
    
        sphere.rotation.y += .5 * (targetX - sphere.rotation.y);
        sphere.rotation.x += .05 * (targetY - sphere.rotation.x);
        sphere.rotation.z += -.05 * (targetY - sphere.rotation.x);
    
        // controls.update()
    
        renderer.render(scene, camera)
    
        window.requestAnimationFrame(tick)
    }
    
    tick()
}