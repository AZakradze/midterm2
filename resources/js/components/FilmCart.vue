<template>
    <div >
        <category-filter
            @filter-category="filterCategory"
        ></category-filter>
        <div class="wrap">
            <div v-for="film in films" class="film">
                <header>
                    <h2>{{ film.title }}</h2>
                    <img :src=" film.image " alt="">
                </header>
                <p>{{ film.desc }}</p>
                <div class="foot">
                    <div class="meta">
                        <span>IMDB: {{ film.IMDB }}</span>
                        <span>Categories: <span v-for="category in film['categories']">
                            {{ category.title }}
                        </span></span>
                    </div>
                    <a class="btn" :href="'/film/show/' + film.id" >Watch</a>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import CategoryFilter from "./CategoryFilter";
export default {
    components: {
      CategoryFilter
    },
    data() {
        return {
            films: []
        }
    },
    methods: {
        filterCategory(id) {
            this.getData(id)
        },
        getData(id=null) {
            const url =  id ?  'http://127.0.0.1:8000/api/films?category_id='+id : 'http://127.0.0.1:8000/api/films';
            fetch(url)
                .then(response => response.json())
                .then(data => this.films = data);
        }
    },
    mounted() {
        this.getData()
    }
}
</script>

<style scoped>
.wrap {
    display: grid;
    grid-template-columns: 47% 47%;
    grid-column-gap: 10px;
}
h2 {
    text-transform: capitalize;
}
.btn {
    display: block;
    cursor: pointer;
    color: black;
    border: 1px solid rgb(70,70,70);
    padding: 8px 0 2px;
    font-weight: bold;
    background-color: grey;
    text-decoration: none;
    text-align: center;
    height: 4vh;
    transition: all .5s;
}
.btn:hover {
    color: white;
    background-color: black;
    padding: 16px 0px 4px;
    height: 5vh;
}
img {
    max-width: 100%;
    width: 100%;
}
.foot {
    display: grid;
    grid-template-columns: auto auto;
}
span {
    display: block;
}
</style>
