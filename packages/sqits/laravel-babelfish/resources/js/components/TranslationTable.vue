<template>
    <div>
        <div class="sm:flex sm:items-center">
            <div class="sm:flex-auto mt-4">
                <h1 class="text-xl font-semibold text-gray-900">Vertalingen</h1>
                <p class="mt-2 text-sm text-gray-700">Hierin staan alle vertalingen van de keys in de applicatie</p>
            </div>
            <div class="mt-4 sm:mt-0 sm:ml-16 sm:flex-none">
                <button @click="confirmPublish" type="button" class="inline-flex transition items-center justify-center rounded-md border border-transparent bg-cyan-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-sky-800 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:w-auto">Publiceren</button>
            </div>
        </div>
        <div class="mt-4 flex flex-col  p-4 -mx-4">
            <div class="w-full justify-between flex">
                <!-- Search -->
                <div class="w-full max-w-xs lg:max-w-md">
                    <label for="search" class="sr-only">Zoeken</label>
                    <div class="relative text-black focus-within:text-gray-600">
                        <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                            <!-- Heroicon name: mini/magnifying-glass -->
                            <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M9 3.5a5.5 5.5 0 100 11 5.5 5.5 0 000-11zM2 9a7 7 0 1112.452 4.391l3.328 3.329a.75.75 0 11-1.06 1.06l-3.329-3.328A7 7 0 012 9z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <input id="search" class="block w-full rounded-md border bg-white bg-opacity-20 py-2 pl-10 pr-3 leading-5 text-gray-900 placeholder-gray-900 focus:border-transparent focus:bg-opacity-100 focus:text-gray-900 focus:placeholder-gray-500   sm:text-sm" placeholder="Zoeken..." type="search" name="search">
                    </div>
                </div>

                <div>
                    <div class="relative inline-block text-left">
                        <div>
                            <button @click="showLanguages = !showLanguages" type="button" class="inline-flex w-full justify-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 focus:ring-offset-gray-100" id="menu-button" aria-expanded="true" aria-haspopup="true">
                                Talen
                                <!-- Heroicon name: mini/chevron-down -->
                                <svg class="-mr-1 ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                                </svg>
                            </button>
                        </div>

                        <!--
                          Dropdown menu, show/hide based on menu state.

                          Entering: "transition ease-out duration-100"
                            From: "transform opacity-0 scale-95"
                            To: "transform opacity-100 scale-100"
                          Leaving: "transition ease-in duration-75"
                            From: "transform opacity-100 scale-100"
                            To: "transform opacity-0 scale-95"
                        -->
                        <div v-if="showLanguages" class="absolute right-0 z-20 mt-2 w-56 origin-top-right divide-y divide-gray-100 rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                            <div class="py-1" role="none">
                                <!-- Active: "bg-gray-100 text-gray-900", Not Active: "text-gray-700" -->
                                <a href="#" @click="selectedLangues = 'nederlands'; showLanguages = false" :class="selectedLangues === 'nederlands' ? 'bg-gray-100 text-gray-900' : 'text-gray-700'" class="text-gray-700 group flex items-center px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-0">
                                    <!-- Heroicon name: mini/pencil-square -->
                                    <span class="fi fi-nl mr-2"></span>
                                    Nederlands
                                </a>
                                <a href="#" @click="selectedLangues = 'engels'; showLanguages = false" :class="selectedLangues === 'engels' ? 'bg-gray-100 text-gray-900' : 'text-gray-700'"  class="text-gray-700 group flex items-center px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-1">
                                    <!-- Heroicon name: mini/document-duplicate -->
                                    <span class="fi fi-gb-eng mr-2"></span>
                                    Engels
                                </a>
                                <a href="#" @click="selectedLangues = 'duits'; showLanguages = false" :class="selectedLangues === 'duits' ? 'bg-gray-100 text-gray-900' : 'text-gray-700'" class="text-gray-700 group flex items-center px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-1">
                                    <!-- Heroicon name: mini/document-duplicate -->
                                    <span class="fi fi-de mr-2"></span>
                                    Duits
                                </a>
                                <a href="#" @click="selectedLangues = 'frans'; showLanguages = false" :class="selectedLangues === 'frans' ? 'bg-gray-100 text-gray-900' : 'text-gray-700'"  class="text-gray-700 group flex items-center px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-1">
                                    <!-- Heroicon name: mini/document-duplicate -->
                                    <span class="fi fi-fr mr-2"></span>
                                    Frans
                                </a>
                                <a href="#"  @click="selectedLangues = 'chinees'; showLanguages = false" :class="selectedLangues === 'chinees' ? 'bg-gray-100 text-gray-900' : 'text-gray-700'" class="text-gray-700 group flex items-center px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-1">
                                    <!-- Heroicon name: mini/document-duplicate -->
                                    <span class="fi fi-cn mr-2"></span>
                                    Chinees
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-4">

                <div class="inline-block min-w-full py-2 align-middle">
                    <div class="border rounded-md">
                        <table class="min-w-full border-separate" style="border-spacing: 0">
                            <thead class="bg-gray-50">
                            <tr>
                                <th scope="col" class="sticky top-0 z-10 border-b border-gray-300 bg-gray-50 bg-opacity-75 py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 backdrop-blur backdrop-filter sm:pl-6 lg:pl-8">Sleutel</th>
                                <th scope="col" class="sticky top-0 z-10 hidden border-b border-gray-300 bg-gray-50 bg-opacity-75 px-3 py-3.5 text-left text-sm font-semibold text-gray-900 backdrop-blur backdrop-filter sm:table-cell">Vertaling</th>
                                <th scope="col" class="sticky top-0 z-10 hidden border-b border-gray-300 bg-gray-50 bg-opacity-75 px-3 py-3.5 text-left text-sm font-semibold text-gray-900 backdrop-blur backdrop-filter lg:table-cell capitalize" >{{selectedLangues}}</th>
                                <th scope="col" class="sticky top-0 z-10 hidden border-b border-gray-300 bg-gray-50 bg-opacity-75 px-3 py-3.5 text-left text-sm font-semibold text-gray-900 backdrop-blur backdrop-filter sm:table-cell">Suggestie</th>
                            </tr>
                            </thead>
                            <tbody class="bg-white">
                            <tr v-for="translation in translations" :key="`translation-${translation.id}`">
                                <td class="whitespace-nowrap border-b border-gray-200 py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6 lg:pl-8">{{translation.key}}</td>

                                <td class="whitespace-nowrap border-b border-gray-200 px-3 py-4 text-sm text-gray-500 hidden sm:table-cell">
                                    <input v-model="translation.fallback" class=" border px-4 py-2 rounded-md w-full "/>
                                </td>
                                <td class="whitespace-nowrap border-b border-gray-200 px-3 py-4 text-sm text-gray-500 hidden lg:table-cell">
                                    <input  v-model="translation.value" class=" border px-4 py-2 rounded-md w-full "/>
                                </td>
                                <td v-if="translation.suggestion === null" class="whitespace-nowrap border-b border-gray-200 px-3 py-4 text-sm text-gray-500 hidden sm:table-cell">
                                    <button @click="getSuggestion" type="button" class="inline-flex transition items-center justify-center rounded-md border border-transparent bg-cyan-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-sky-800 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:w-full">Suggestie ophalen</button>
                                </td>
                                <td v-else class="whitespace-nowrap border-b border-gray-200 px-3 py-4 text-sm text-gray-500 hidden sm:table-cell">
                                    <div class="mt-1 flex rounded-md shadow-sm">
                                        <input type="text" v-model="translation.suggestion.value" disabled name="company-website" id="company-website" class="block border w-full min-w-0 flex-1 rounded-none rounded-l-md border-gray-300 px-3 py-2 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                        <span @click="translation.value = translation.suggestion.value" class="inline-flex items-center rounded-r-md border border-l-0 border-gray-300 bg-gray-50 px-3 text-gray-500 sm:text-sm hover:bg-gray-200 duration-100  transition cursor-pointer">Overnemen</span>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>

</template>
<script>
export default {
    name: "translationtable",
    data() {
        return {
            showLanguages: false,
            selectedLangues : 'nederlands',
            translations: [
                {
                    id: 1,
                    key: 'translation.title',
                    fallback: 'title' ,
                    value: '',
                    suggestion: null
                },
                {
                    id: 2,
                    key: 'translation.subject',
                    fallback: 'subject',
                    value: '',
                    suggestion: {
                        value: 'Onderwerp'
                    }
                }
            ]
        }
    },
    methods: {
        confirmPublish(){
            const confirmed = confirm('Weet je zeker dat je alles wilt publiceren?');
            if(confirmed){
                // TODO do a backend call.
            }
        },

        getSuggestion(){
            console.log('call naar de backend')
            // TODO do a backend call.
        },

        submitTranslation(event){
            const value = event.target.value;
            // TODO do a backend call

        }
    }
}
</script>
