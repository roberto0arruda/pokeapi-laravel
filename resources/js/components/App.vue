<template>
    <div id="app">
        <div class="grid grid-cols-3 gap-4">
            <div
                class="py-8 px-8 max-w-sm mx-auto bg-white rounded-xl shadow-md space-y-2 sm:py-4 sm:flex sm:items-center sm:space-y-0 sm:space-x-6"
                v-for="item in pokemons.data">
                <img class="block mx-auto h-24 rounded-full sm:mx-0 sm:flex-shrink-0" :src="item.image"
                     alt="Pokemon Face">
                <div class="text-center space-y-2 sm:text-left">
                    <div class="space-y-0.5">
                        <p class="text-lg text-black font-semibold">
                            {{ item.id }}
                        </p>
                        <p class="text-gray-500 font-medium">
                            {{ item.name }}
                        </p>
                    </div>
                    <button class="px-4 py-1 text-sm text-purple-600 font-semibold rounded-full border border-purple-200 hover:text-white hover:bg-purple-600 hover:border-transparent focus:outline-none focus:ring-2 focus:ring-purple-600 focus:ring-offset-2">
                        detalhe
                    </button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "App",
    data() {
        return {
            pokemons: []
        }
    },
    created() {
        this.read()
    },
    methods: {
        async read() {
            const {data} = await axios.get('api/pokemons')

            this.pokemons = data
        },
    }
}
</script>
