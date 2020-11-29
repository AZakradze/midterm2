<template>
    <div>
        <form method="post" action="http://127.0.0.1:8000/add/category">
            <label for="c">Enter category name</label>
            <input type="text" id="c"  name="title">
            <button type="submit">Add</button>
        </form>
        <div>
            <ul>
                <li v-for="cat in list">{{ cat.title}}</li>
            </ul>
        </div>
    </div>
</template>

<script>
export default {
    data(){
        return {
            list: []
        }
    },
    mounted() {
            fetch('http://127.0.0.1:8000/api/categories')
                .then(response => response.json())
                .then(data => this.list = data);        }

}
</script>

<style scoped>
form {
    width: 100%;

}
label {
    display: block;
    margin: 20px auto;
    font-weight: bold;

}
button {
    padding:10px 20px;

}
input {
    padding:10px 20px;

}
</style>
