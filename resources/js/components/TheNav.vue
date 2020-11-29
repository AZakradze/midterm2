<template>
    <div class="nav">
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/manage">Manage</a></li>
        </ul>
    </div>
</template>

<script>
    export default {

    }
</script>
<style scoped>
div {
    width: 100%;
    height: 10vh;
    border-bottom: 1px solid rgb(50,50,50);
    box-shadow: 0 2px rgba(0, 0, 0, 0.5);
}
ul {
    padding: 20px;
    margin: 0;
    list-style:none;
    right: 0;
    float: right;
}
li {
    text-decoration: none;
    display: inline-block;
}
a {
    text-decoration: none;
    color: rgb(70,70,70);
    padding: 5px 10px;
}

</style>
