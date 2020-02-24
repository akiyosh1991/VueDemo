<template>
    <nav>
        <RouterLink class="navbar__brand" to="/">
            CalenderDemo
        </RouterLink>
        <div class="navbar__menu">
            <span class="navbar__item">
                userName
            </span>
            <div class="navbar__item">
                <RouterLink class="button button--link" to="/login">
                    Login / Register
                </RouterLink>
            </div>
        </div>
    </nav>
</template>
