<template>
    <div>
        <section class="content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 breadcrumbf">
                        <a href="#">Create New account</a>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-8">
                        <!-- POST -->
                        <div class="post">
                            <form
                                @submit.prevent="login"
                                class="form newtopic"
                                method="post"
                            >
                                <div class="postinfotop">
                                    <h2>Create New Account</h2>
                                </div>

                                <!-- acc section -->
                                <div class="accsection">
                                    <div class="acccap">
                                        <div class="userinfo pull-left">
                                            &nbsp;
                                        </div>
                                        <div class="posttext pull-left">
                                            <h3>Required Fields</h3>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="topwrap">
                                        <div class="userinfo pull-left">
                                            <div class="avatar">
                                                <img
                                                    src="new/images/avatar-blank.jpg"
                                                    alt=""
                                                />
                                                <div class="status green">
                                                    &nbsp;
                                                </div>
                                            </div>
                                            <div class="imgsize"></div>
                                            <div>
                                                <button class="btn">welcome</button>
                                            </div>
                                        </div>
                                        <div class="posttext pull-left">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12" >
                                                    <input
                                                        type="text"
                                                        placeholder="Email"
                                                        class="form-control"
                                                        id="email"
                                                        name="email"
                                                        v-model="form.email"
                                                    />
                                                </div>
                                                <div class="col-lg-12 col-md-12">
                                                    <input
                                                        type="password"
                                                        placeholder="Password"
                                                        class="form-control"
                                                        id="password"
                                                        name="password"
                                                        v-model="form.password"
                                                    />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <!-- acc section END -->

                                <!-- acc section -->
                                <div class="accsection privacy">
                                    <div class="acccap">
                                        <div class="userinfo pull-left">
                                            &nbsp;
                                        </div>
                                        <button type="submit" class="btn btn-primary v-btn-block">Login</button>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="topwrap">
                                        <div class="userinfo pull-left">
                                            &nbsp;
                                        </div>
                                        
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <!-- acc section END -->

                                
                            </form>
                        </div>
                        <!-- POST -->
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <!-- -->
                        <div class="sidebarblock">
                            <h3>Categories</h3>
                            <div class="divline"></div>
                            <div class="blocktxt">
                                <ul class="cats">
                                    <li>
                                        <a href="#"
                                            >Trading for Money
                                            <span class="badge pull-right"
                                                >20</span
                                            ></a
                                        >
                                    </li>
                                    <li>
                                        <a href="#"
                                            >Vault Keys Giveway
                                            <span class="badge pull-right"
                                                >10</span
                                            ></a
                                        >
                                    </li>
                                    <li>
                                        <a href="#"
                                            >Misc Guns Locations
                                            <span class="badge pull-right"
                                                >50</span
                                            ></a
                                        >
                                    </li>
                                    <li>
                                        <a href="#"
                                            >Looking for Players
                                            <span class="badge pull-right"
                                                >36</span
                                            ></a
                                        >
                                    </li>
                                    <li>
                                        <a href="#"
                                            >Stupid Bugs &amp; Solves
                                            <span class="badge pull-right"
                                                >41</span
                                            ></a
                                        >
                                    </li>
                                    <li>
                                        <a href="#"
                                            >Video &amp; Audio Drivers
                                            <span class="badge pull-right"
                                                >11</span
                                            ></a
                                        >
                                    </li>
                                    <li>
                                        <a href="#"
                                            >2K Official Forums
                                            <span class="badge pull-right"
                                                >5</span
                                            ></a
                                        >
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!-- -->
                        <div class="sidebarblock">
                            <h3>Poll of the Week</h3>
                            <div class="divline"></div>
                            <div class="blocktxt">
                                <p>Which game you are playing this week?</p>
                                <form action="#" method="post" class="form">
                                    <table class="poll">
                                        <tr>
                                            <td>
                                                <div class="progress">
                                                    <div
                                                        class="progress-bar color1"
                                                        role="progressbar"
                                                        aria-valuenow="40"
                                                        aria-valuemin="0"
                                                        aria-valuemax="100"
                                                        style="width: 90%"
                                                    >
                                                        Call of Duty Ghosts
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="chbox">
                                                <input
                                                    id="opt1"
                                                    type="radio"
                                                    name="opt"
                                                    value="1"
                                                />
                                                <label for="opt1"></label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="progress">
                                                    <div
                                                        class="progress-bar color2"
                                                        role="progressbar"
                                                        aria-valuenow="40"
                                                        aria-valuemin="0"
                                                        aria-valuemax="100"
                                                        style="width: 63%"
                                                    >
                                                        Titanfall
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="chbox">
                                                <input
                                                    id="opt2"
                                                    type="radio"
                                                    name="opt"
                                                    value="2"
                                                    checked
                                                />
                                                <label for="opt2"></label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="progress">
                                                    <div
                                                        class="progress-bar color3"
                                                        role="progressbar"
                                                        aria-valuenow="40"
                                                        aria-valuemin="0"
                                                        aria-valuemax="100"
                                                        style="width: 75%"
                                                    >
                                                        Battlefield 4
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="chbox">
                                                <input
                                                    id="opt3"
                                                    type="radio"
                                                    name="opt"
                                                    value="3"
                                                />
                                                <label for="opt3"></label>
                                            </td>
                                        </tr>
                                    </table>
                                </form>
                                <p class="smal">
                                    Voting ends on 19th of October
                                </p>
                            </div>
                        </div>

                        <!-- -->
                        <div class="sidebarblock">
                            <h3>My Active Threads</h3>
                            <div class="divline"></div>
                            <div class="blocktxt">
                                <a href="#"
                                    >This Dock Turns Your iPhone Into a Bedside
                                    Lamp</a
                                >
                            </div>
                            <div class="divline"></div>
                            <div class="blocktxt">
                                <a href="#"
                                    >Who Wins in the Battle for Power on the
                                    Internet?</a
                                >
                            </div>
                            <div class="divline"></div>
                            <div class="blocktxt">
                                <a href="#"
                                    >Sony QX10: A Funky, Overpriced Lens Camera
                                    for Your Smartphone</a
                                >
                            </div>
                            <div class="divline"></div>
                            <div class="blocktxt">
                                <a href="#"
                                    >FedEx Simplifies Shipping for Small
                                    Businesses</a
                                >
                            </div>
                            <div class="divline"></div>
                            <div class="blocktxt">
                                <a href="#"
                                    >Loud and Brave: Saudi Women Set to Protest
                                    Driving Ban</a
                                >
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-xs-12">
                        <div class="pull-left">
                            <a href="#" class="prevnext"
                                ><i class="fa fa-angle-left"></i
                            ></a>
                        </div>
                        <div class="pull-left">
                            <ul class="paginationforum">
                                <li class="hidden-xs"><a href="#">1</a></li>
                                <li class="hidden-xs"><a href="#">2</a></li>
                                <li class="hidden-xs"><a href="#">3</a></li>
                                <li class="hidden-xs"><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a href="#">6</a></li>
                                <li><a href="#" class="active">7</a></li>
                                <li><a href="#">8</a></li>
                                <li class="hidden-xs"><a href="#">9</a></li>
                                <li class="hidden-xs"><a href="#">10</a></li>
                                <li class="hidden-xs hidden-md">
                                    <a href="#">11</a>
                                </li>
                                <li class="hidden-xs hidden-md">
                                    <a href="#">12</a>
                                </li>
                                <li class="hidden-xs hidden-sm hidden-md">
                                    <a href="#">13</a>
                                </li>
                                <li><a href="#">1586</a></li>
                            </ul>
                        </div>
                        <div class="pull-left">
                            <a href="#" class="prevnext last"
                                ><i class="fa fa-angle-right"></i
                            ></a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>
<style scoped>
.btn:focus {
  outline: none !important;
}
</style>
<script>
export default {
    data() {
        return {
            form : {
                email:null,
                password:null
            }
        }
    },
    methods: {
        login(){
            User.login(this.form)
        }
    },
};
</script>
