<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nos Services</title>
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
                transform: translateY(16px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-fade-up {
            animation: fadeInUp .6s cubic-bezier(.16, 1, .3, 1) both;
        }
    </style>
</head>

<body class="bg-[#F5F3EE] text-[#1C2B24] min-h-screen">

    <nav class="sticky top-0 z-50 backdrop-blur-md bg-[#F5F3EE]/80 border-b border-[#1C2B24]/10">
        <div class="max-w-6xl mx-auto px-6 py-4 flex items-center justify-between">
            <a href="/accueil"
                class="font-display text-lg font-semibold text-[#1C2B24]">{{ $nomEntreprise ?? 'Entreprise' }}</a>
            <div class="hidden sm:flex items-center gap-8 text-sm font-medium text-[#5B6B60]">
                <a href="/accueil" class="hover:text-[#1F6F5C] transition-colors">Accueil</a>
                <a href="/services" class="text-[#1F6F5C] font-semibold">Services</a>
                <a href="/personnel" class="hover:text-[#1F6F5C] transition-colors">Équipe</a>
                <a href="/contact"
                    class="bg-[#1F6F5C] text-white px-4 py-2 rounded-full hover:bg-[#164F42] transition-colors">Contact</a>
            </div>
        </div>
    </nav>

    <div class="max-w-5xl mx-auto px-6 py-16">
        <div class="text-center mb-14 animate-fade-up">
            <span class="inline-block text-xs font-semibold tracking-wider uppercase text-[#B23A57] mb-3">Ce que nous
                faisons</span>
            <h1 class="font-display text-4xl sm:text-5xl font-semibold text-[#1C2B24] mb-3">Nos services</h1>
            <p class="text-[#5B6B60]">Des solutions sur mesure pour propulser votre activité.</p>
        </div>

        @php $accents = ['#1F6F5C', '#B23A57']; @endphp

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            @foreach($services as $service)
                @php $c = $accents[$loop->index % 2]; @endphp
                <div class="animate-fade-up relative bg-white p-7 rounded-2xl shadow-sm border border-[#1C2B24]/5 hover:shadow-xl hover:shadow-[#1C2B24]/5 transition-all duration-300 transform hover:-translate-y-1.5 group overflow-hidden"
                    style="animation-delay: {{ $loop->index * 70 }}ms">
                    <div class="absolute top-0 left-0 h-1 w-0 group-hover:w-full transition-all duration-500"
                        style="background: {{ $c }};"></div>

                    <div class="w-12 h-12 rounded-xl flex items-center justify-center mb-5 font-bold text-lg text-white transition-transform duration-300 group-hover:scale-110 group-hover:rotate-6"
                        style="background: {{ $c }};">
                        ✓
                    </div>

                    <h3 class="font-display text-xl font-semibold text-[#1C2B24] mb-2 transition-colors duration-200">
                        {{ $service['titre'] }}
                    </h3>

                    <p class="text-[#5B6B60] text-sm leading-relaxed">
                        {{ $service['description'] }}
                    </p>
                </div>
            @endforeach
        </div>

        <div class="text-center mt-14">
            <a href="/accueil"
                class="text-[#1F6F5C] hover:text-[#164F42] font-medium inline-flex items-center gap-1.5 transition-colors">
                ← Retour à l'accueil
            </a>
        </div>
    </div>

</body>

</html>
