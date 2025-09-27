<template>
	<NcContent app-name="app_template">
		<NcAppContent>
			<h2>Hello world!</h2>
		</NcAppContent>
	</NcContent>
</template>

<script>

import { NcAppContent, NcContent } from '@nextcloud/vue'

export default {
	name: 'App',
	components: {
		NcContent,
		NcAppContent,
	},
}
</script>

<style scoped lang="scss">
main {
	display: flex;
	justify-content: center;
	margin: 16px;
}
</style>
