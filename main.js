const { createApp } = Vue;


createApp({
    data() {
        return {
            apiGames: "https://api.rawg.io/api/",
            apiCategoryGames:"games",
            keyApi:"?key=fd4311dda6f7475eb6746b35ba928a6c",
            games: []

        };
    },
    methods: {
    },
    mounted() {
        axios.get(this.apiGames + this.apiCategoryGames + this.keyApi)
        .then(response=> {
            this.games = response.data.results;
            console.log(this.games);
        })
        .catch(error => {
            console.log(error);
        })
    }
}).mount("#app");