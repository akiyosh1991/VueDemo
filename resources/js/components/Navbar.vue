<template>
    <nav>
        <RouterLink class="navbar__brand" to="/">
            CalenderDemo
        </RouterLink>
        <div class="navbar__menu">
            <div v-if="isLogin" class="navbar__item">

            </div>
            <span v-if="isLogin" class="navbar__item">
                {{ username }}
            </span>
            <div v-else class="navbar__item">

            </div>
            <div class="navbar__item">
                <RouterLink class="button button--link" to="/login">
                    Login / Register
                </RouterLink>
            </div>
        </div>
    </nav>
</template>

<script>
export default {
    computed: {
        isLogin() {
            return this.$store.getters['auth/check']
        },
        username() {
            return this.$store.getters['auth/username']
        }
    }
}
</script>
