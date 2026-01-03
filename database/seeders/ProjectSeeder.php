<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
        // Supprimer les projets existants
        Project::truncate();

        // Projet - MK-Lego
        Project::create([
            'title' => 'MK-Lego',
            'slug' => 'mk-lego',
            'description_en' => 'A Prusa MK3 3D printer repurposed to autonomously assemble LEGO models from any 3D structure.',
            'description_fr' => 'Une imprimante 3D Prusa MK3 reconvertie pour assembler automatiquement des modèles LEGO à partir de n\'importe quelle structure 3D.',
            'content_en' => "MK-Lego was an ambitious project where we took a Prusa MK3 3D printer and completely transformed it into a LEGO brick assembler. The core idea was simple, instead of extruding plastic, why not pick and place LEGO bricks layer by layer?  Executing that vision, however, required rethinking every part of the machine. 

        We started with mechanical design.  We replaced the extruder with a custom-built nozzle capable of picking up, rotating, and placing individual LEGO bricks with precision. This involved designing a rotating gripper mechanism, spring-loaded sliding components, and a servo motor for controlled brick placement. We laser-cut MDF parts and 3D-printed plastic components, iterating on the design until we got smooth, reliable brick handling.  We also redesigned the base plate to be LEGO-compatible and built eight custom brick dispensers with IR sensors to detect brick presence.

        On the electronics side, we implemented a dual-microcontroller architecture.  The Arduino Mega handles the screen, real-time motion control of the three stepper motors and safety-critical timing, while an ESP32-S3 manages the dispensors' sensor acquisition, and their control. Getting these two systems to communicate reliably through a custom protocol was one of the trickier challenges we solved. 

        The software pipeline is where everything comes together. We built a JavaFX desktop application that loads 3D models (STL or LDD formats), automatically slices them into LEGO layers, and optimizes brick placement. You can edit the structure, paint bricks different colors, and add support bricks where needed. The app then generates custom g-code instructions that the printer understands, handling the entire workflow from 3D model to a physical LEGO structure.

        What made this project special was the integration of so many disciplines—mechanical design, electronics, firmware development, and software engineering. We had to think about everything from how to grip a LEGO brick reliably to how to optimize layer packing for structural stability.",
            'content_fr' => "MK-Lego était un projet ambitieux où nous avons pris une imprimante 3D Prusa MK3 et l'avons complètement transformée en assembleur de briques LEGO. L'idée de base était simple, au lieu d'extruder du plastique, pourquoi ne pas prendre et placer des briques LEGO couche par couche ?  Cependant, exécuter cette vision nécessitait de repenser chaque partie de la machine. 

        Nous avons commencé par la conception mécanique. Nous avons remplacé l'extrudeur par une buse personnalisée capable de saisir, faire pivoter et placer des briques LEGO individuelles avec précision. Cela impliquait de concevoir un mécanisme de pince rotatif, des composants coulissants à ressort, et un servomoteur pour le positionnement contrôlé des briques.  Nous avons découpé à la laser des pièces en MDF et imprimé en 3D des composants en plastique, en itérant sur la conception jusqu'à obtenir une manipulation fiable et fluide des briques.  Nous avons également repensé la plaque de base pour qu'elle soit compatible LEGO et construit huit distributeurs de briques personnalisés avec des capteurs IR pour détecter la présence de briques.

        Du côté électronique, nous avons implémenté une architecture à double microcontrôleur. L'Arduino Mega gère l'écran, le contrôle des moteurs pas à pas en temps réel et les minuteries critiques de sécurité, tandis que l'ESP32-S3 gère l'acquisition des capteurs des distributeurs et leur contrôle. Mettre en place une communication fiable entre ces deux systèmes via un protocole personnalisé était l'un des défis les plus délicats que nous avons résolus.

        Le pipeline logiciel est où tout s'assemble. Nous avons construit une application de bureau JavaFX qui charge des modèles 3D (formats STL ou LDD), les découpe automatiquement en couches LEGO, et optimise le placement des briques. Vous pouvez éditer la structure, peindre les briques en différentes couleurs et ajouter des briques de support où nécessaire. L'application génère ensuite des instructions de g-code personnalisées que l'imprimante comprend, gérant l'ensemble du flux de travail du modèle 3D à une structure LEGO physique.

        Ce qui a rendu ce projet spécial, c'est l'intégration de tant de disciplines—conception mécanique, électronique, développement firmware et ingénierie logicielle.  Nous avons dû penser à tout, de la façon de saisir une brique LEGO de manière fiable à la manière d'optimiser l'emballage des couches pour la stabilité structurelle.",
            'category' => 'Prototyping, Embedded Systems, Robotics',
            'technologies' => ['C++', 'Arduino', 'ESP32', 'Fusion 360'],
            'main_image' => 'MkLego-MK3.webp',
            'gallery_images' => ['MkLego-NozzlePhoto.webp', 'MkLego-BasePlate.webp', 'MkLego-Dispensers.webp', 'MkLego-Nozzle.webp', 'MkLego-ElectricalBox1.webp', 'MkLego-ElectricalBox2.webp', 'MkLego-Menu.webp', 'MkLego-Bunny.webp', 'MkLego-BunnySupport.webp'],
            'github_url' => 'https://github.com/epfl-cs358/2025fa-mklego',
            'project_date' => '2025-12-19',
        ]);

        // Projet 2 - Portfolio Website
        Project::create([
            'title' => 'Portfolio',
            'slug' => 'portfolio-website',
            'description_en' => 'A modern portfolio website built with Laravel and Tailwind CSS.',
            'description_fr' => 'Un site portfolio moderne construit avec Laravel et Tailwind CSS.',
            'content_en' => 'Just look arround the site to see what I could achieve!',
            'content_fr' => 'Jetez un œil au site pour voir ce que j\'ai pu accomplir !',
            'category' => 'Web Development',
            'technologies' => ['Laravel', 'Tailwind CSS', 'PHP', 'Blade'],
            'main_image' => 'Portfolio.webp',
            'gallery_images' => null,
            'github_url' => 'https://github.com/e-bernier/Portfolio',
            'demo_url' => null,
            'project_date' => '2026-01-05',
        ]);

        // Projet - Map'In
        Project::create([
            'title' => "Map'In",
            'slug' => 'mapin',
            'description_en' => 'A native Android social app that connects students through events and shared memories on an interactive map.',
            'description_fr' => 'Une application Android native social qui connecte les étudiants à travers les événements et les souvenirs partagés sur une carte interactive.',
            'content_en' => "Map'In started with a simple observation: events happen at places, and places hold memories. We wanted to build something that brought both together in one space.  The result is a social map for students where you can discover upcoming events in your area, join friends, and later post memories from the experiences you shared. 

        On the technical side, we built this as a native Android app using Kotlin with Jetpack Compose for the UI. The architecture follows MVVM with a clean separation between UI, domain logic, and data layers, which made it much easier for our team to work in parallel. For the backend, we leaned heavily on Firebase—Authentication for user management, Firestore for real-time event and memory data, Cloud Storage for photos and videos, and Cloud Messaging for notifications. The map features are powered by Mapbox GL, giving us interactive maps with directions and offline support for saved regions.

        One feature we're particularly proud of is the AI assistant.  Using the OpenRouter API and Amazon Nova 2 Lite, we built a voice-powered recommendation engine that suggests events based on your location and interests.

        What made this project special was working as a team with the SCRUM method on a complete, production-ready application. We had to think about performance, error handling, offline functionality, and user experience across different Android devices. The modular architecture kept things organized and made it possible to add features without breaking what was already working.  From designing the system architecture to handling real-time data synchronization and API integration, this project gave us a real sense of what it takes to ship a mobile app.",
            'content_fr' => "Map'In est parti d'une observation simple : les événements se déroulent à des endroits, et les endroits conservent les souvenirs.  Nous voulions créer quelque chose qui réunisse les deux dans un seul espace. Le résultat est une carte sociale pour les étudiants où vous pouvez découvrir les événements à proximité, rejoindre des amis et poster plus tard des souvenirs des expériences que vous avez partagées. 

        Sur le plan technique, nous avons construit cette application Android native en utilisant Kotlin avec Jetpack Compose pour l'interface.  L'architecture suit le pattern MVVM avec une séparation claire entre les couches UI, logique métier et données, ce qui a facilité le travail en parallèle de notre équipe. Pour le backend, nous nous sommes appuyés fortement sur Firebase—Authentification pour la gestion des utilisateurs, Firestore pour les données d'événements et de souvenirs en temps réel, Cloud Storage pour les photos et vidéos, et Cloud Messaging pour les notifications. Les fonctionnalités de carte sont alimentées par Mapbox GL, ce qui nous donne des cartes interactives avec des itinéraires et le support hors ligne pour les régions enregistrées.

        Une fonctionnalité dont nous sommes particulièrement fiers est l'assistant IA. Utilisant l'API OpenRouter et Amazon Nova 2 Lite, nous avons construit un moteur de recommandation contrôlé par la voix qui suggère des événements en fonction de votre localisation et vos intérêts.

        Ce qui a rendu ce projet spécial, c'est de travailler en équipe avec la méthode SCRUM sur une application complète et prête pour la production. Nous avons dû penser à la performance, à la gestion des erreurs, aux fonctionnalités hors ligne et à l'expérience utilisateur sur différents appareils Android. L'architecture modulaire a maintenu les choses organisées et a rendu possible l'ajout de fonctionnalités sans casser ce qui fonctionnait déjà. De la conception de l'architecture système à la gestion de la synchronisation des données en temps réel et l'intégration d'API, ce projet nous a donné une vrai compréhension de ce qu'il faut pour lancer une application mobile.",
            'category' => 'Mobile Development, Android',
            'technologies' => [
                'Kotlin',
                'Git',
                'Jetpack Compose',
                'Firebase',
                'Firestore',
                'Mapbox'
            ],
            'main_image' => 'MapIn-Event.webp',
            'gallery_images' => ['MapIn-LogIn.webp', 'MapIn-Map.webp', 'MapIn-Owned.webp', 'MapIn-Past.webp', 'MapIn-Memory.webp', 'MapIn-Create.webp', 'MapIn-AI.webp'],
            'github_url' => 'https://github.com/swent-mapin/Map-In',
            'demo_url' => null,
            'project_date' => '2025-12-18',
        ]);

        // Projet - L-Waves
        Project::create([
            'title' => 'L-Waves',
            'slug' => 'l-waves',
            'description_en' => 'An interactive WebGL-based ocean simulation and visualization project showcasing real-time 3D graphics programming and procedural generation techniques.',
            'description_fr' => 'Un projet de simulation et de visualisation d\'océan interactif basé sur WebGL mettant en avant la programmation graphique 3D en temps réel et les techniques de génération procédurale.',
            'content_en' => 'L-Waves is an interactive ocean simulation built with WebGL with a focus on real-time 3D graphics. The project features a dynamically simulated water surface with multiple rendering effects—from standard Blinn-Phong lighting to day-night transitions and cel shading.
            
            The rendering architecture was built modularly, which lets us swap between different shader pipelines without breaking the rest of the system. On the simulation side, we implemented procedural mesh generation for the ocean, handling continuous vertex updates to create realistic water dynamics. We also experimented with L-Systems to procedurally generate content and integrated Perlin noise for texture generation. The interactive UI lets you tweak parameters in real-time and explore the scene from any angle with smooth camera controls.
            
            Throughout the project, we had a special care for performance due to the limited resources, using gl-matrix for optimized math operations and carefully balancing visual quality with computational efficiency to maintain smooth rendering.  It\'s a project that really pushed my understanding of graphics pipelines, shader development, and how to structure complex systems in a way that\'s maintainable and extensible.',
            'content_fr' => 'L-Waves est une simulation océanique interactive construite avec WebGL, mettant l\'accent sur la 3D en temps réel. Le projet présente une surface d\'eau simulée dynamiquement avec plusieurs effets de rendu, allant de l\'éclairage standard Blinn-Phong aux transitions jour-nuit et au cel shading.
            
            L\'architecture de rendu a été construite de manière modulaire, ce qui nous permet d\'échanger entre différents pipelines de shaders sans casser le reste du système. Côté simulation, nous avons mis en œuvre une génération procédurale de maillages pour l\'océan, gérant des mises à jour continues des sommets pour créer une dynamique réaliste de l\'eau. Nous avons également expérimenté les L-Systems pour générer du contenu de manière procédurale et intégré le bruit de Perlin pour la génération de textures. L\'interface utilisateur interactive vous permet d\'ajuster les paramètres en temps réel et d\'explorer la scène sous n\'importe quel angle avec des contrôles de caméra fluides.
            
            Tout au long du projet, nous avons accordé une attention particulière aux performances à cause des ressources limitées, en utilisant gl-matrix pour des opérations mathématiques optimisées et en équilibrant soigneusement la qualité visuelle avec l\'efficacité computationnelle afin de maintenir un rendu fluide. C\'est un projet qui a vraiment poussé ma compréhension des pipelines graphiques, du développement de shaders et de la manière de structurer des systèmes complexes de manière maintenable et extensible.',
            'category' => 'Computer Graphics, Web Development',
            'technologies' => ['JavaScript', 'WebGL', 'HTML5'],
            'main_image' => 'LWaves-Main.webp',
            'gallery_images' => ['Lwaves-Night.webp', 'LWaves-Lsystems.webp', 'LWaves-Waves.webp'],
            'github_url' => null,
            'demo_url' => 'https://e-bernier.github.io/L-Waves/',
            'project_date' => '2025-05-30',
        ]);
    }
}