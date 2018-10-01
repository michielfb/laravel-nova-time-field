<template>
    <span class="whitespace-no-wrap">{{ formattedDate }}</span>
</template>

<script>
export default {
    props: ['field'],

    computed: {
        formattedDate() {
            return moment(this.field.value, 'HH:mm:ss').format(this.field.format);
        }
    }
}
</script>