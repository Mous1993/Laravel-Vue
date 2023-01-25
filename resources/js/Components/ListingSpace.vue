<template>
    <div>
        <span class="font-bold">{{ listing.beds }}</span> bds <span class="texxt-gray-400">| </span>
        <span class="font-bold">{{ listing.baths }}</span> ba <span class="texxt-gray-400">| </span>
        <span class="font-bold">{{ listing.area }}</span> &#13217;
    </div>
</template>


<script setup>
 defineProps({listing: Object})
</script>