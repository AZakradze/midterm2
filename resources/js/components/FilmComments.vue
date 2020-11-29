<template>
    <div>
        <h2>Comments:</h2>
        <form :action="'/add/comments/'+film_id" method="post">
            <input type="text" name="body" class="com" placeholder="Comment...">
        </form>
        <div v-for="com in comments" class="comment">
                <div class="left">
                <img src="/imgs/hero.jpg" alt="">
            </div>
            <div class="right">
                <p class="user">{{ com.user.name }}</p>
                <p>{{ com.body }}</p>
                <span>{{ com.created_at }}</span>
            </div>
        </div>
    </div>
</template>

<script>

export default {
    data() {
        return {
            comments: []
        }
    },
    props: ['film_id'],
    mounted() {
        fetch('http://127.0.0.1:8000/api/film/'+this.film_id+'/comments')
        .then(response => response.json())
        .then(data => this.comments = data)
    }
}
</script>

<style scoped>
.user {
    font-weight: bolder;
}
form{
    width: 100%;
}
.com{
    width: 100%;
    padding: 10px 20px;
}
.comment {
    width: 100%;
    margin: 10px auto;
    display: grid;
    grid-template-columns: 10% 70%;
    column-gap: 5%;
}
p {
    margin: 0 0 5px 0;
}
img {
    max-width: 100%;
    height: 65px;
}
</style>
