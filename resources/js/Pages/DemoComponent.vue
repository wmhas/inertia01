<template>
  <div>
    <h1>Hello, {{ user.name }}!</h1>
    <p>Email: {{ user.email }}</p>
  </div>
</template>

<script setup>
// Using defineProps to define the props that are passed to the component
defineProps({
  user: Object
});
</script>
