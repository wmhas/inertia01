<template><h1>hello oe 2022 </h1>
<div>
    <button @click="$event => count++">+</button> {{ count }}
    <button @click="$event => count--">-</button>
</div>
</template>

<script>
export  default {
    data() {
        return {
            count: 0 ,
        };
    },
};
</script>
