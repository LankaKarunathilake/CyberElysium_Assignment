<template>
    <div>
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <Link class="navbar-brand" :href="route('dashboard')"
                    ><img class="companylogo" src="../../../../public/images/cyberelysium.png" alt="logo"/></Link
                >
                <button
                    class="navbar-toggler"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
                >
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div
                    class="collapse navbar-collapse"
                    id="navbarSupportedContent"
                >
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <Link
                                class="nav-link active"
                                aria-current="page"
                                :href="route('dashboard')"
                                >Home</Link
                            >
                        </li>
                        <li class="nav-item">
                            <Link
                                class="nav-link"
                                aria-current="page"
                                :href="route('studentList')"
                                >Student List</Link
                            >
                        </li>
                    </ul>

                    <!-- @if (Auth::user())
            <form method="post" action="{{ route('logout') }}" x-data>
              @csrf

              <x-dropdown-link href="{{ route('logout') }}"
                      onclick="event.preventDefault()
                      this.closest('form').submit();">
                  {{ __('Log Out') }}
              </x-dropdown-link>
            </form>

          @else -->

                    <span
                        ><Link class="btn btn-primary" :href="route('login')"
                            >Login</Link
                        ></span
                    ><span
                        ><Link
                            class="btn btn-primary ms-2"
                            :href="route('register')"
                            >Register</Link
                        ></span
                    >

                    <!-- @endif -->
                </div>
            </div>
        </nav>
    </div>
</template>

<script>
import { Link } from "@inertiajs/vue3";

export default {
    components: {
        Link,
    },
};
</script>

<style lang="css" scoped>

    .companylogo{
        height: 50px;
    }

</style>
