<template>
    <div :class="colorClass">
        <svg :width="width" :height="height" :viewBox="'0 0 ' + width + ' ' + height" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M17.54 8.81001C19.1748 8.81001 20.5 7.48478 20.5 5.85001C20.5 4.21525 19.1748 2.89001 17.54 2.89001C15.9053 2.89001 14.58 4.21525 14.58 5.85001C14.58 7.48478 15.9053 8.81001 17.54 8.81001Z"
                fill="currentColor" />
            <path
                d="M6.46 8.81001C8.09476 8.81001 9.42 7.48478 9.42 5.85001C9.42 4.21525 8.09476 2.89001 6.46 2.89001C4.82524 2.89001 3.5 4.21525 3.5 5.85001C3.5 7.48478 4.82524 8.81001 6.46 8.81001Z"
                fill="currentColor" />
            <path
                d="M17.54 21.11C19.1748 21.11 20.5 19.7848 20.5 18.15C20.5 16.5152 19.1748 15.19 17.54 15.19C15.9053 15.19 14.58 16.5152 14.58 18.15C14.58 19.7848 15.9053 21.11 17.54 21.11Z"
                fill="currentColor" />
            <path
                d="M6.46 21.11C8.09476 21.11 9.42 19.7848 9.42 18.15C9.42 16.5152 8.09476 15.19 6.46 15.19C4.82524 15.19 3.5 16.5152 3.5 18.15C3.5 19.7848 4.82524 21.11 6.46 21.11Z"
                fill="currentColor" />
        </svg>
    </div>
</template>

<script setup>

const props = defineProps({
    colorClass: {
        type: String,
        default: 'text-[#475569]'
    },
    width: {
        type: String,
        default: '24'
    },
    height: {
        type: String,
        default: '24'
    }
});
</script>
