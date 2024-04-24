<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('My Rewards Points') }}
        </h2>
    </x-slot>

    <div class="flex justify-center items-center h-screen bg-gradient-to-b from-blue-400 to-indigo-600">
        <div class="max-w-md w-full">
            <div class="bg-white shadow-lg rounded-lg overflow-hidden p-6">
                @if ($points === null)
                    <p class="text-center text-gray-600">You have no rewards points at this moment.</p>
                @else
                    <div class="text-center mb-8">
                        <p class="text-4xl text-gray-800">Your rewards points:</p>
                        <p class="text-6xl font-bold text-blue-600">{{ $points }}</p>
                    </div>
                  
                    <div class="text-center">
                        <a href="{{ route('room2') }}" class="block text-center mt-4">
                            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full focus:outline-none focus:shadow-outline">
                                Spend Your Rewards
                            </button>
                        </a>
                    </div>
                @endif
            </div>
        </div>
    </div>
   
</x-app-layout>
