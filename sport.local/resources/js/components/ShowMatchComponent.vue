<template>
   <!-- <form method="post" action="/matches/{{$match->id}}">
    @method('PATCH')
    @csrf
    <label for="played" class="checkbox  {{$match->played ? 'is-played' : ''}}">
        <input type="checkbox" name="played" onchange="this.form.submit()" {{$match->played ? 'checked' : ''}}>
    </label>
    {{$match->teams}}
    <br>{{$match->description}}
</form>-->
</template>

<script>
    export default {
        name: "ShowMatchComponent"
    }
</script>

<style scoped>

</style>
