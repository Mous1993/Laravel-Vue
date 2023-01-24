<template>
  <div>
    <p>Index</p>
    <Link href="/hello">Show Page</Link>
    <p>
      <b>the message is : {{ message }}</b>
    </p>
  </div>
</template>

<script setup>
import { Link } from "@inertiajs/vue3"
defineProps({ message: String });
</script>