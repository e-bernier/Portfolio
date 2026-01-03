<?php
namespace Database\Seeders;
use App\Models\Experience;
use Illuminate\Database\Seeder;

class ExperienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Experience::truncate();
        
        Experience::create([
            'title_en' => 'Distributed Key-Value Store',
            'title_fr' => 'Stockage Clé-Valeur Distribué',
            'description_en' => 'Built a distributed key-value store (DKVS) system in C in week by week guided project in a course on computer systems. Implemented a hash table-based storage system distributed across multiple servers with fault tolerance through data replication. Developed network communication with sockets for PUT/GET operations, ring-based key distribution and quorum-based consistency mechanisms.',
            'description_fr' => 'Construction d\'un système de stockage clé-valeur distribué (DKVS) en C dans un projet guidé semaine par semaine dans un cours sur les systèmes informatiques. Implémentation d\'un système de stockage basé sur tables de hachage distribué sur plusieurs serveurs avec tolérance aux pannes par réplication de données. Développement de communication réseau avec sockets pour opérations PUT/GET, distribution de clés basée sur anneau et mécanismes de cohérence par quorum.',
            'technologies' => ['C', 'Git', 'GDB'],
            'project_date' => '2025-06-01'
        ]);

        Experience::create([
            'title_en' => 'Multi-User Web Application',
            'title_fr' => 'Application Web Multijoueur',
            'description_en' => 'Developed a real-time multiplayer web application in Scala using a custom webapp framework in the context of a course on software construction. Implemented client-server architecture with WebSocket communication, state machine-based server logic for game state management, and interactive web UI.',
            'description_fr' => 'Développement d\'une application web multijoueur en temps réel en Scala utilisant un framework webapp personnalisé dans le cadre d\'un cours sur la construction logicielle. Implémentation d\'une architecture client-serveur avec communication WebSocket, logique serveur basée sur machine à états pour la gestion de l\'état du jeu, et interface web interactive.',
            'technologies' => ['Scala', 'Git'],
            'project_date' => '2025-01-15'
        ]);

        Experience::create([
            'title_en' => 'RISC-V Processor Design',
            'title_fr' => 'Design de Processeur RISC-V',
            'description_en' => 'Designed and implemented a complete multicycle RISC-V (RV32I) processor in Verilog from scratch in the context of a guided project in a computer architecture course. Built an Arithmetic-Logic Unit (ALU), memory controller, and peripheral interfaces including 7-segment display, buttons, and LED controllers. Extended the processor with interrupt handling capabilities by implementing a CSR (Control and Status Registers) controller and interrupt service routines. Performed gate-level simulations and wrote comprehensive testbenches to verify hardware functionality.',
            'description_fr' => 'Design et implémentation d\'un processeur RISC-V (RV32I) multicycle complet en Verilog depuis zéro dans le contexte d\'un projet guidé dans un cours sur l\'architecture des ordinateurs. Construction d\'une unité arithmétique et logique (ALU), contrôleur mémoire, et interfaces périphériques incluant affichage 7-segments, boutons et contrôleurs LED. Extension du processeur avec gestion des interruptions via implémentation d\'un contrôleur CSR (Control and Status Registers) et routines de service d\'interruption. Réalisation de simulations au niveau portes logiques et écriture de testbenches complets pour vérifier la fonctionnalité matérielle.',
            'technologies' => ['Verilog'],
            'project_date' => '2025-01-29'
        ]);

        Experience::create([
            'title_en' => 'Real-Time Aircraft Tracking System',
            'title_fr' => 'Système de Suivi en Temps Réel des Aéronefs',
            'description_en' => 'Developed a complete aircraft tracking application in Java that decodes ADS-B radio messages from aircraft and displays them on an interactive map. Implemented radio signal processing to decode 1090 MHz transmissions from a software-defined radio (AirSpy R2), parsed aviation data protocols, and created a real-time graphical interface using JavaFX. Built the system incrementally over weekly milestones.',
            'description_fr' => 'Développement d\'une application complète de suivi d\'aéronefs en Java décodant les messages radio ADS-B des avions et les affichant sur une carte interactive. Implémentation du traitement de signaux radio pour décoder les transmissions 1090 MHz d\'une radio logicielle (AirSpy R2), analyse des protocoles de données aéronautiques, et création d\'une interface graphique en temps réel avec JavaFX. Construction du système de manière incrémentale sur étapes hebdomadaires.',
            'technologies' => ['Java'],
            'project_date' => '2023-06-02'
        ]);
    }
}