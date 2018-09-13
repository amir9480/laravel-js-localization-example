<template>
    <div>
        <h2>Example Component</h2>
        {{ jtrans("home.laravel_is_awesome") }}<br>
        {{ jtrans("home.make_something", {'param': jtrans("home.awesome")}) }}<br>
        <br><br>
        Using filters:<br>
        {{ "home.laravel_is_awesome"|trans }}<br>
        {{ "home.make_something"|trans({'param': jtrans("home.awesome")}) }}<br>
        <br><br><br>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
