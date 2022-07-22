<script setup lang="ts">
defineProps<{
	versions: {
		php: string
		laravel: string
	}
}>()
</script>

<template layout>
	<div class="min-h-screen flex items-center justify-center">
        <div class="text-center">
            <h1 class="text-7xl">pages/admin.vue</h1>
            <a class="text-3xl font-medium mt-12 inline-block underline text-blue-600" href="/">To Landing</a>
            <div class="mt-3"><strong>Note:</strong> Navigating with different root view should use <code>&lt;a&gt;</code> tag instead of <code>&lt;Link&gt;</code></div>
        </div>
    </div>
</template>
