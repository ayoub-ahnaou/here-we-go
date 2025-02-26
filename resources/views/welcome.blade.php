<x-app>
    <div class="flex-grow container mx-auto">
        <!-- Navigation des catégories -->
        <div class="w-full py-4 sticky top-6 z-30">
            <div class="container mx-auto px-4 relative border-b border-gray-200 bg-white">
                <div class="flex items-center space-x-8 overflow-x-auto no-scrollbar py-2">
                    @foreach ($categories as $category)
                        <span
                            class="flex flex-col items-center min-w-[56px] text-sm text-gray-500 hover:text-black py-2 cursor-pointer">
                            <span>{{ $category->name }}</span>
                        </span>
                    @endforeach

                    <!-- Bouton Suivant -->
                    <button class="absolute right-4 top-1/2 -translate-y-1/2 bg-white p-2 rounded-full shadow-md">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                            </path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Grille des logements -->
        <div class="container mx-auto px-4 py-4">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-6 my-6">
                @foreach ($annonces as $annonce)
                    <div class="space-y-1">
                        <div class="relative aspect-square rounded-xl overflow-hidden">
                            <a href="{{ route('annonces.show', $annonce->id) }}">
                                <img src="{{ asset('storage/' . $annonce->images) }}" alt="{{ $annonce->city }}"
                                    class="w-full h-full object-cover" />
                            </a>

                            <form action="{{ route('favoris.store', $annonce) }}" method="POST">
                                @csrf
                                <button class="absolute top-3 right-3 text-transparent">
                                    <svg class="w-6 h-6" fill="black" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                        </path>
                                    </svg>
                                </button>
                            </form>

                            <div class="absolute top-3 left-3 bg-white px-2 py-1 rounded-md text-xs">
                                {{ $annonce->category->name }}
                            </div>
                        </div>

                        <div class="flex flex-col">
                            <div>
                                <div class="flex justify-between items-center">
                                    <h3 class="font-semibold">{{ $annonce->city }}, {{ $annonce->country }}</h3>
                                </div>

                                <p class="text-gray-500 text-sm">Séjournez chez {{ $annonce->user->firstname }}
                                    {{ $annonce->user->lastname }}</p>
                            </div>
                        </div>
                        <p class="font-semibold text-sm">{{ $annonce->price }} MAD / nuit</p>
                    </div>
                @endforeach
            </div>

            <div class="">
                {{ $annonces->links() }}
            </div>
        </div>
    </div>
</x-app>
