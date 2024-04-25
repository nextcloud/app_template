<template>
	<NcAppContent>
		<div id="app_template">
			<h1>Hello world!</h1>
		</div>
	</NcAppContent>
</template>

<script>
import NcAppContent from '@nextcloud/vue/dist/Components/NcAppContent.js'

export default {
	name: 'App',
	components: {
		NcAppContent,
	},
}
</script>

<style scoped lang="scss">
#app_template {
	display: flex;
	justify-content: center;
	margin: 16px;
}
</style>
