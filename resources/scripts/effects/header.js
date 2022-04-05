import * as THREE from 'three';
import * as dat from 'dat.gui';

const gui = new dat.GUI();

const canvas = document.querySelector('canvas.webgl');

const scene = new THREE.Scene();

// Object
const geometry = new THREE.SphereBufferGeometry(.5, 64, 64 );

const material = new THREE.MeshStandardMaterial();
material.metalness = 0.7;
material.roughness = 0.7;
material.color = new THREE.Color(0x292929);

const sphere = new THREE.Mesh(geometry, material);
scene.add(sphere);

const pointlight = new THREE.PointLight(0xffffff, 0.1);
pointlight.position.x = 2;
pointlight.position.y = 3;
pointlight.position.z = 4;

scene.add(pointlight)

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

const clock = new THREE.Clock()
const tick = () =>
{

    const elapsedTime = clock.getElapsedTime()
    sphere.rotation.y = .5 * elapsedTime

    // controls.update()

    renderer.render(scene, camera)

    window.requestAnimationFrame(tick)
}

tick()