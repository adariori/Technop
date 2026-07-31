<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil - {{ $nomEntreprise }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,500;9..144,600;9..144,700&family=Inter:wght@400;500;600;700&display=swap"
        rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }

        .font-display {
            font-family: 'Fraunces', serif;
            font-optical-sizing: auto;
        }

        ::selection {
            background: #1F6F5C;
            color: #fff;
        }

        @keyframes blob {

            0%,
            100% {
                transform: translate(0, 0) scale(1);
            }

            33% {
                transform: translate(30px, -40px) scale(1.12);
            }

            66% {
                transform: translate(-25px, 25px) scale(0.92);
            }
        }

        .animate-blob {
            animation: blob 14s infinite ease-in-out;
        }

        .animate-blob-delay {
            animation: blob 14s infinite ease-in-out;
            animation-delay: -6s;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(18px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-fade-up {
            animation: fadeInUp .9s cubic-bezier(.16, 1, .3, 1) both;
        }

        .delay-1 {
            animation-delay: .1s;
        }

        .delay-2 {
            animation-delay: .2s;
        }

        .delay-3 {
            animation-delay: .35s;
        }
    </style>
</head>

<body class="bg-[#F5F3EE] text-[#1C2B24] min-h-screen relative overflow-x-hidden">

    <!-- Décor -->
    <div
        class="pointer-events-none absolute -top-24 -left-24 w-96 h-96 bg-[#1F6F5C]/20 rounded-full blur-3xl animate-blob">
    </div>
    <div
        class="pointer-events-none absolute top-1/3 -right-24 w-96 h-96 bg-[#B23A57]/15 rounded-full blur-3xl animate-blob-delay">
    </div>

    <!-- Nav -->
    <nav class="sticky top-0 z-50 backdrop-blur-md bg-[#F5F3EE]/80 border-b border-[#1C2B24]/10">
        <div class="max-w-6xl mx-auto px-6 py-4 flex items-center justify-between">
            <a href="/accueil"
                class="font-display text-lg font-semibold text-[#1C2B24]">{{ $nomEntreprise ?? 'Entreprise' }}</a>
            <div class="hidden sm:flex items-center gap-8 text-sm font-medium text-[#5B6B60]">
                <a href="/accueil" class="text-[#1F6F5C] font-semibold">Accueil</a>
                <a href="/services" class="hover:text-[#1F6F5C] transition-colors">Services</a>
                <a href="/personnel" class="hover:text-[#1F6F5C] transition-colors">Équipe</a>
                <a href="/contact"
                    class="bg-[#1F6F5C] text-white px-4 py-2 rounded-full hover:bg-[#13e3b2] transition-colors shadow-sm">Contact</a>
            </div>
        </div>
    </nav>

    <!-- Hero -->
    <div
        class="relative z-10 max-w-3xl mx-auto px-6 text-center min-h-[calc(100vh-73px)] flex flex-col items-center justify-center">

        <h1
            class="animate-fade-up delay-1 font-display text-5xl sm:text-6xl font-semibold tracking-tight text-[#1C2B24] mb-6 leading-[1.1]">
            Bienvenue chez<br>
            <span class="relative inline-block text-[#1F6F5C]">
                {{ $nomEntreprise }}
                <svg class="absolute -bottom-2 left-0 w-full" height="10" viewBox="0 0 200 10"
                    preserveAspectRatio="none">
                    <path d="M0,5 Q50,-2 100,5 T200,5" stroke="#B23A57" stroke-width="3" fill="none"
                        stroke-linecap="round" />
                </svg>
            </span>
        </h1>

        <p class="animate-fade-up delay-2 text-lg text-[#5B6B60] mb-10 leading-relaxed max-w-2xl mx-auto">
            {{ $description }}
        </p>

        <div class="animate-fade-up delay-3 flex flex-wrap justify-center gap-4">
            <a href="/services"
                class="group bg-[#1F6F5C] hover:bg-[#164F42] text-white font-medium px-6 py-3 rounded-full shadow-md hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1 inline-flex items-center gap-2">
                Découvrir nos services
                <span class="transition-transform duration-300 group-hover:translate-x-1">→</span>
            </a>
            <a href="/personnel"
                class="bg-white hover:bg-[#1C2B24] hover:text-white text-[#1C2B24] border border-[#1C2B24]/15 font-medium px-6 py-3 rounded-full shadow-sm transition-all duration-300">
                Notre équipe
            </a>
            <a href="/contact"
                class="bg-white hover:bg-[#1C2B24] hover:text-white text-[#1C2B24] border border-[#1C2B24]/15 font-medium px-6 py-3 rounded-full shadow-sm transition-all duration-300">
                Nous contacter
            </a>
        </div>
    </div>

</body>

</html>
