<template>
    <div class="wrap">
        <button :class="selectedTab == 'list' ? 'active' : ''"  @click="toggletabs('list')"> Films List </button>
        <button :class="selectedTab == 'add' ? 'active' : ''"  @click="toggletabs('add')"> Add Film </button>
        <button :class="selectedTab == 'addc' ? 'active' : ''"  @click="toggletabs('addc')"> Add Category </button>

        <div>
            <films-list v-if="selectedTab == 'list'"></films-list>
            <add-film v-if="selectedTab == 'add'"></add-film>
            <add-category v-if="selectedTab == 'addc'"></add-category>
        </div>
    </div>
</template>

<script>
import FilmsList from "./FilmsList";
import AddFilm from "./AddFilm";
import AddCategory from "./AddCategory";
export default {
    components: {
      FilmsList,
        AddFilm,
        AddCategory
    },
    data() {
        return {
            selectedTab: 'list'
        }
    },
    methods: {
        toggletabs: function (tab) { return this.selectedTab = tab}
    }
}
</script>

<style scoped>
.active {
    background-color: black;
    color: white;
}
.wrap {
    display: block;
    width: 100%;

}
button {
    padding: 10px 20px;
    margin-right: 20px;
}
</style>
