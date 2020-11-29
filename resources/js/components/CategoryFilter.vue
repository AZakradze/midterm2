<template>
    <div>
        <ul class="ul">
            <li class="li" v-for="cat in categories">
                <a class="a" @click="$emit('filter-category', cat.id)">{{ cat.title }}</a>
            </li>
        </ul>
    </div>
</template>


<script>
    export default {
        data() {
            return {
                categories: []
            }
        },
        mounted() {
            fetch('http://127.0.0.1:8000/api/categories')
                .then(response => response.json())
                .then(data => this.categories = data);        }
    }
</script>

<style scoped>
.ul {
    list-style: none;
}
.li {
    display: inline-block;
}
.a {
    border: none;
    font-weight: bolder;
    cursor: pointer;
    background-color: white;
    padding: 4px 16px;
    transition: all .5s;
    display: block;
    text-transform: capitalize;
    text-decoration: none;
    color: black;
}
.a:hover {
    color: rgb(255,100,50);
    transform: translateY(-5px);
}
.a:focus{
    outline: none;
}
</style>
