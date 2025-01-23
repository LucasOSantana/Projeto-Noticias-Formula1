
import * as THREE from "https://cdn.skypack.dev/three@0.129.0/build/three.module.js";
import { OrbitControls } from "https://cdn.skypack.dev/three@0.129.0/examples/jsm/controls/OrbitControls.js";
import { GLTFLoader } from "https://cdn.skypack.dev/three@0.129.0/examples/jsm/loaders/GLTFLoader.js";



const scene = new THREE.Scene();
const camera = new THREE.PerspectiveCamera(75, window.innerWidth / window.innerHeight, 0.1, 1000);

//Keep track of the mouse position, so we can make the object move
let mouseX = window.innerWidth / 2;
let mouseY = window.innerHeight / 2;

let object;
let controls;
let objToRender = 'dashboard3D';

const loader = new GLTFLoader();

//Carrega o arquivo
loader.load(
  `/assets/img/${objToRender}/scene.gltf`,
  function (gltf) {
    object = gltf.scene;

    // Adiciona Sombras
    object.traverse(function (child) {
      if (child.isMesh) {
        child.castShadow = true; 
        child.receiveShadow = true;
      }
    });

    scene.add(object);
  },
  function (xhr) {
    console.log((xhr.loaded / xhr.total * 100) + '% loaded');
  },
  function (error) {
    console.error(error);
  }
);

// Instancia 
const renderer = new THREE.WebGLRenderer({ alpha: true, antialias: true }); //Alpha é o fundo transparente, antialias o serrilhamento
renderer.setSize(window.innerWidth, window.innerHeight);
document.getElementById("container3D").appendChild(renderer.domElement);

//Camera inicial
camera.position.x =  3;
camera.position.y =  3;
camera.position.z =  5;
renderer.shadowMap.enabled = true;

//Plano horizontal (chão) - Necessário para sombras
const ground = new THREE.PlaneGeometry(10, 10);
const groundMaterial = new THREE.ShadowMaterial({
  opacity: 0.5 
});

const groundMesh = new THREE.Mesh(ground, groundMaterial);
groundMesh.rotation.x = -Math.PI / 2;
groundMesh.position.y = 0;
groundMesh.receiveShadow = true;
scene.add(groundMesh);

//Luz levemente amarela a esquerda do carro (Visão do piloto)
const sideLight = new THREE.DirectionalLight(0xffdb78, 7); 
sideLight.position.set(2, 3, 0)
sideLight.castShadow = true;
scene.add(sideLight);

//Luz ambiente
const ambientLight = new THREE.AmbientLight(0x333333, 3);
scene.add(ambientLight);

//Controle de camera
controls = new OrbitControls(camera, renderer.domElement);

//Renderização
function animate() {
  requestAnimationFrame(animate);
  renderer.render(scene, camera);
}

window.addEventListener("resize", function () {
  camera.aspect = window.innerWidth / window.innerHeight;
  camera.updateProjectionMatrix();
  renderer.setSize(window.innerWidth, window.innerHeight);
});
animate();


