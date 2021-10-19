<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,minimum-scale=1">
    <title>Lucas Admin Dashboard</title>
    <link rel="stylesheet" type="text/css" href="css/estilo.css"/>
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
</head>
<body>
<div>

    <input type="checkbox" name="" id="sidebar-toggle">
    <div class="sidebar">
        <div class="sidebar-brand">
            <div class="brand-flex">
                <i class="las la-edit"></i>

                <div class="brand-icons">
                    <span class="las la-bell"></span>
                    <span class="las la-user-circle"></span>
                </div>
            </div>
        </div>

        <div class="sidebar-main">
            <div class="sidebar-user">
                <img src="images/Ranger.jpeg" alt="">
                <div class="">
                    <h3>Adam Johnson</h3>
                    <span>adamjohson@gmail.com</span>
                </div>
            </div>

            <div class="sidebar-menu">
                <div class="menu-head">
                    <span>Applications</span>
                </div>
                <ul>
                    <li>
                        <a href="">
                            <span class="las la-balance-scale"></span>
                            Finance
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <span class="las la-chart-pie"></span>
                            Analytics
                        </a>
                    </li>
                </ul>

                <div class="menu-head">
                    <span>Dashboard</span>
                </div>
                <ul>
                    <li>
                        <a href="">
                            <span class="las la-calendar"></span>
                            Calendar
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <span class="las la-shopping-cart"></span>
                            Ecommerce
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <span class="las la-envelope"></span>
                            Mailbox
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <span class="las la-check-circle"></span>
                            Tasks
                        </a>
                    </li>
                </ul>
            </div>

        </div>
    </div>

    <div class="main-content">
        <header>
            <div class="menu-toggle">
                <label for="sidebar-toggle">
                    <span class="las la-bars"></span>
                </label>
            </div>

            <div class="header-icons">
                <span class="las la-search"></span>
                <span class="las la-bookmark"></span>
                <span class="las la-sms"></span>
            </div>
        </header>

        <main>
            <div class="page-header">
                <div>
                    <h1>Analytics Dashboard</h1>
                    <small>Monitor key metrics. Check reporting and review insights</small>
                </div>

                <div class="header-actions">
                    <button>
                        <span class="las la-file-export"></span>
                        Export
                    </button>
                    <button>
                        <span class="las la-tools"></span>
                        Settings
                    </button>
                </div>
            </div>

            <div class="cards">
                <div class="card-single">
                    <div class="card-flex">
                        <div class="card-info">
                            <div class="card-head">
                                <span>Purchases</span>
                                <small>Number of purchases</small>
                            </div>

                            <h2>17,663</h2>

                            <small>2% less purchase</small>
                        </div>
                        <div class="card-chart danger">
                            <span class="las la-chart-line"></span>
                        </div>
                    </div>
                </div>

                <div class="card-single">
                    <div class="card-flex">
                        <div class="card-info">
                            <div class="card-head">
                                <span>Refunds</span>
                                <small>Value of refunded orders</small>
                            </div>

                            <h2>$4,523.11</h2>

                            <small>10% less refund</small>
                        </div>
                        <div class="card-chart success">
                            <span class="las la-chart-line"></span>
                        </div>
                    </div>
                </div>

                <div class="card-single">
                    <div class="card-flex">
                        <div class="card-info">
                            <div class="card-head">
                                <span>Unique Visitors</span>
                                <small>Number of visitors</small>
                            </div>

                            <h2>46,085</h2>

                            <small>2% less visitors</small>
                        </div>
                        <div class="card-chart yellow">
                            <span class="las la-chart-line"></span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="jobs-grid">
                <div class="analytics-card">
                    <div class="analytics-head">
                        <h3>Actions needed</h3>

                        <span class="las la-ellipsis-h"></span>
                    </div>

                    <div class="analytics-chart">
                        <div class="chart-circle">
                            <h1>74%</h1>
                        </div>

                        <div class="analytics-note">
                            <small>Note: Current sprint requires stakeholders
                            meeting to reach conclusion</small>
                        </div>
                    </div>

                    <div class="analytics-btn">
                        <button>Generate report</button>
                    </div>
                </div>

                <div class="jobs">
                    <h2>
                        Jobs <small>See all jobs <span class="las la-arrow-right"></span></small>
                    </h2>

                    <div class="table-responsive">
                        <table>
                            <tbody>
                                <tr>
                                    <td>
                                        <div>
                                            <span class="indicator"></span>
                                        </div>
                                    </td>
                                    <td>
                                        <div>
                                            Customer experience dessigner
                                        </div>
                                    </td>
                                    <td>
                                        <div>
                                            Design
                                        </div>

                                    </td>
                                    <td>
                                        <div>
                                            Copenhagen Dk.
                                        </div>

                                    </td>
                                    <td>
                                        <div>
                                            Posted 6 days ago
                                        </div>

                                    </td>
                                    <td>
                                        <div>
                                            <button>8 applicants</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div>
                                            <span class="indicator even"></span>
                                        </div>
                                    </td>
                                    <td>
                                        <div>
                                            Software developer
                                        </div>
                                    </td>
                                    <td>
                                        <div>
                                            Developer
                                        </div>
                                    </td>
                                    <td>
                                        <div>
                                            Copenhagen Dk.
                                        </div>
                                    </td>
                                    <td>
                                        <div>
                                            Posted 6 days ago
                                        </div>
                                    </td>
                                    <td>
                                        <div>
                                            <button>3 applicants</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div>
                                            <span class="indicator"></span>
                                        </div>
                                    </td>
                                    <td>
                                        <div>
                                            Customer experience dessigner
                                        </div>
                                    </td>
                                    <td>
                                        <div>
                                            Design
                                        </div>

                                    </td>
                                    <td>
                                        <div>
                                            Copenhagen Dk.
                                        </div>

                                    </td>
                                    <td>
                                        <div>
                                            Posted 6 days ago
                                        </div>

                                    </td>
                                    <td>
                                        <div>
                                            <button>8 applicants</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div>
                                            <span class="indicator even"></span>
                                        </div>
                                    </td>
                                    <td>
                                        <div>
                                            Software developer
                                        </div>
                                    </td>
                                    <td>
                                        <div>
                                            Developer
                                        </div>
                                    </td>
                                    <td>
                                        <div>
                                            Copenhagen Dk.
                                        </div>
                                    </td>
                                    <td>
                                        <div>
                                            Posted 6 days ago
                                        </div>
                                    </td>
                                    <td>
                                        <div>
                                            <button>3 applicants</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div>
                                            <span class="indicator"></span>
                                        </div>
                                    </td>
                                    <td>
                                        <div>
                                            Customer experience dessigner
                                        </div>
                                    </td>
                                    <td>
                                        <div>
                                            Design
                                        </div>

                                    </td>
                                    <td>
                                        <div>
                                            Copenhagen Dk.
                                        </div>

                                    </td>
                                    <td>
                                        <div>
                                            Posted 6 days ago
                                        </div>

                                    </td>
                                    <td>
                                        <div>
                                            <button>8 applicants</button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </main>
    </div>


</div>
</body>
</html>