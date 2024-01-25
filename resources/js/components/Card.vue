<template>
    <card class="flex content-center">
        <div v-for="(item) in card.items" class="w-1/6 text-center px-2 py-3">
            <a :href="item.uri" class="no-underline text-90" :class="{ 'font-semibold': item.isActive }">{{ item.title }}</a>
        </div>
    </card>
</template>

<script>
export default {
    props: [
        'card',
    ],
}
</script>
