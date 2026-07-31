<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contactez-nous</title>
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
        }

        ::selection {
            background: #1F6F5C;
            color: #fff;
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
            animation: fadeInUp .7s cubic-bezier(.16, 1, .3, 1) both;
        }

        @keyframes blob {

            0%,
            100% {
                transform: translate(0, 0) scale(1);
            }

            50% {
                transform: translate(20px, -20px) scale(1.08);
            }
        }

        .animate-blob {
            animation: blob 10s infinite ease-in-out;
        }
    </style>
</head>

<body class="bg-[#F5F3EE] text-[#1C2B24] min-h-screen relative overflow-x-hidden">

    <div
        class="pointer-events-none absolute -top-20 -right-20 w-80 h-80 bg-[#1F6F5C]/15 rounded-full blur-3xl animate-blob">
    </div>

    <nav class="sticky top-0 z-50 backdrop-blur-md bg-[#F5F3EE]/80 border-b border-[#1C2B24]/10">
        <div class="max-w-6xl mx-auto px-6 py-4 flex items-center justify-between">
            <a href="/accueil"
                class="font-display text-lg font-semibold text-[#1C2B24]">{{ $nomEntreprise ?? 'Entreprise' }}</a>
            <div class="hidden sm:flex items-center gap-8 text-sm font-medium text-[#5B6B60]">
                <a href="/accueil" class="hover:text-[#1F6F5C] transition-colors">Accueil</a>
                <a href="/services" class="hover:text-[#1F6F5C] transition-colors">Services</a>
                <a href="/personnel" class="hover:text-[#1F6F5C] transition-colors">Équipe</a>
                <a href="/contact" class="bg-[#1F6F5C] text-white px-4 py-2 rounded-full">Contact</a>
            </div>
        </div>
    </nav>

    <div class="relative z-10 flex items-center justify-center px-6 py-16 min-h-[calc(100vh-73px)]">
        <div
            class="animate-fade-up bg-white p-8 rounded-3xl shadow-xl shadow-[#1C2B24]/5 border border-[#1C2B24]/5 max-w-md w-full">
            <h1 class="font-display text-3xl font-semibold text-[#1C2B24] mb-1 text-center">Parlons-en</h1>
            <p class="text-sm text-[#5B6B60] text-center mb-6">Une question ? Écrivez-nous.</p>

            <div class="mb-8 flex justify-center">
                @if($ouvert)
                    <span
                        class="inline-flex items-center gap-1.5 bg-[#2F9E6E]/10 text-[#2F9E6E] px-3 py-1.5 rounded-full text-sm font-medium border border-[#2F9E6E]/20">
                        <span class="w-2 h-2 bg-[#2F9E6E] rounded-full animate-pulse"></span>
                        Actuellement ouvert
                    </span>
                @else
                    <span
                        class="inline-flex items-center gap-1.5 bg-[#C0435B]/10 text-[#C0435B] px-3 py-1.5 rounded-full text-sm font-medium border border-[#C0435B]/20">
                        <span class="w-2 h-2 bg-[#C0435B] rounded-full"></span>
                        Fermé
                    </span>
                @endif
            </div>

            <div class="space-y-3 mb-8">
                <div
                    class="p-4 bg-[#F5F3EE] rounded-2xl flex items-center gap-4 hover:bg-[#1F6F5C]/5 transition-colors duration-300 group">
                    <span
                        class="w-10 h-10 shrink-0 rounded-full bg-[#1F6F5C] text-white flex items-center justify-center text-base group-hover:scale-110 transition-transform">✉️</span>
                    <div class="min-w-0">
                        <p class="text-[11px] text-[#5B6B60] font-semibold uppercase tracking-wide">Email</p>
                        <a href="mailto:{{ $infos['email'] }}"
                            class="text-[#1F6F5C] hover:underline text-sm font-medium break-all">{{ $infos['email'] }}</a>
                    </div>
                </div>
                <div
                    class="p-4 bg-[#F5F3EE] rounded-2xl flex items-center gap-4 hover:bg-[#1F6F5C]/5 transition-colors duration-300 group">
                    <span
                        class="w-10 h-10 shrink-0 rounded-full bg-[#B23A57] text-white flex items-center justify-center text-base group-hover:scale-110 transition-transform">📞</span>
                    <div>
                        <p class="text-[11px] text-[#5B6B60] font-semibold uppercase tracking-wide">Téléphone</p>
                        <p class="text-[#1C2B24] text-sm font-medium">{{ $infos['telephone'] }}</p>
                    </div>
                </div>
                <div
                    class="p-4 bg-[#F5F3EE] rounded-2xl flex items-center gap-4 hover:bg-[#1F6F5C]/5 transition-colors duration-300 group">
                    <span
                        class="w-10 h-10 shrink-0 rounded-full bg-[#C98A2B] text-white flex items-center justify-center text-base group-hover:scale-110 transition-transform">📍</span>
                    <div>
                        <p class="text-[11px] text-[#5B6B60] font-semibold uppercase tracking-wide">Adresse</p>
                        <p class="text-[#1C2B24] text-sm font-medium">{{ $infos['adresse'] }}</p>
                    </div>
                </div>
            </div>

            <a href="/accueil"
                class="block text-center bg-[#1C2B24] hover:bg-[#1F6F5C] text-white font-medium py-3 rounded-full transition-colors duration-300">
                ← Retour à l'accueil
            </a>
        </div>
    </div>

</body>

</html>
