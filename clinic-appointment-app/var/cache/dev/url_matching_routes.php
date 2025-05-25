<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/about' => [[['_route' => 'app_about', '_controller' => 'App\\Controller\\HomeController::about'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'app_contact', '_controller' => 'App\\Controller\\HomeController::contact'], null, null, null, false, false, null]],
        '/contact/submit' => [[['_route' => 'app_contact_submit', '_controller' => 'App\\Controller\\HomeController::contactSubmit'], null, ['POST' => 0], null, false, false, null]],
        '/services' => [[['_route' => 'app_services', '_controller' => 'App\\Controller\\HomeController::services'], null, null, null, false, false, null]],
        '/doctors' => [[['_route' => 'app_doctors', '_controller' => 'App\\Controller\\HomeController::doctors'], null, null, null, false, false, null]],
        '/faq' => [[['_route' => 'app_faq', '_controller' => 'App\\Controller\\HomeController::faq'], null, null, null, false, false, null]],
        '/privacy' => [[['_route' => 'app_privacy', '_controller' => 'App\\Controller\\HomeController::privacy'], null, null, null, false, false, null]],
        '/terms' => [[['_route' => 'app_terms', '_controller' => 'App\\Controller\\HomeController::terms'], null, null, null, false, false, null]],
        '/emergency' => [[['_route' => 'app_emergency', '_controller' => 'App\\Controller\\HomeController::emergency'], null, null, null, false, false, null]],
        '/reset-password' => [[['_route' => 'app_forgot_password_request', '_controller' => 'App\\Controller\\ResetPasswordController::request'], null, null, null, false, false, null]],
        '/reset-password/check-email' => [[['_route' => 'app_check_email', '_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\SecurityController::register'], null, null, null, false, false, null]],
        '/appointments' => [[['_route' => 'app_appointment_index', '_controller' => 'App\\Controller\\AppointmentController::index'], null, null, null, false, false, null]],
        '/appointments/new' => [[['_route' => 'app_appointment_new', '_controller' => 'App\\Controller\\AppointmentController::new'], null, null, null, false, false, null]],
        '/doctor/schedule' => [[['_route' => 'app_doctor_schedule', '_controller' => 'App\\Controller\\DoctorController::schedule'], null, null, null, false, false, null]],
        '/doctor/appointments' => [[['_route' => 'app_doctor_appointments', '_controller' => 'App\\Controller\\DoctorController::appointments'], null, null, null, false, false, null]],
        '/profile' => [[['_route' => 'app_profile', '_controller' => 'App\\Controller\\SecurityController::profile'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'app_admin_dashboard', '_controller' => 'App\\Controller\\AdminController::dashboard'], null, null, null, false, false, null]],
        '/admin/doctors' => [[['_route' => 'app_admin_doctors', '_controller' => 'App\\Controller\\AdminController::doctors'], null, null, null, false, false, null]],
        '/admin/doctors/new' => [[['_route' => 'app_admin_doctor_new', '_controller' => 'App\\Controller\\AdminController::newDoctor'], null, null, null, false, false, null]],
        '/admin/services' => [[['_route' => 'app_admin_services', '_controller' => 'App\\Controller\\AdminController::services'], null, null, null, false, false, null]],
        '/admin/services/new' => [[['_route' => 'app_admin_service_new', '_controller' => 'App\\Controller\\AdminController::newService'], null, null, null, false, false, null]],
        '/admin/appointments' => [[['_route' => 'app_admin_appointments', '_controller' => 'App\\Controller\\AdminController::appointments'], null, null, null, false, false, null]],
        '/admin/reports' => [[['_route' => 'app_admin_reports', '_controller' => 'App\\Controller\\AdminController::reports'], null, null, null, false, false, null]],
        '/api/slots' => [[['_route' => 'api_available_slots', '_controller' => 'App\\Controller\\ApiController::getAvailableSlots'], null, ['GET' => 0], null, false, false, null]],
        '/api/doctors' => [[['_route' => 'api_doctors', '_controller' => 'App\\Controller\\ApiController::getDoctors'], null, ['GET' => 0], null, false, false, null]],
        '/api/check-availability' => [[['_route' => 'api_check_availability', '_controller' => 'App\\Controller\\ApiController::checkAvailability'], null, ['GET' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/reset\\-password/reset/([^/]++)(*:73)'
                .'|/a(?'
                    .'|p(?'
                        .'|pointments/([^/]++)(?'
                            .'|(*:111)'
                            .'|/(?'
                                .'|cancel(*:129)'
                                .'|reschedule(*:147)'
                            .')'
                        .')'
                        .'|i/doctors/([^/]++)/services(*:184)'
                    .')'
                    .'|dmin/(?'
                        .'|doctors/([^/]++)/edit(*:222)'
                        .'|services/([^/]++)/edit(*:252)'
                    .')'
                .')'
                .'|/doctor/appointments/([^/]++)/(?'
                    .'|complete(*:303)'
                    .'|no(?'
                        .'|\\-show(*:322)'
                        .'|tes(*:333)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        73 => [[['_route' => 'app_reset_password', '_controller' => 'App\\Controller\\ResetPasswordController::reset'], ['token'], null, null, false, true, null]],
        111 => [[['_route' => 'app_appointment_show', '_controller' => 'App\\Controller\\AppointmentController::show'], ['id'], null, null, false, true, null]],
        129 => [[['_route' => 'app_appointment_cancel', '_controller' => 'App\\Controller\\AppointmentController::cancel'], ['id'], ['POST' => 0], null, false, false, null]],
        147 => [[['_route' => 'app_appointment_reschedule', '_controller' => 'App\\Controller\\AppointmentController::reschedule'], ['id'], null, null, false, false, null]],
        184 => [[['_route' => 'api_doctor_services', '_controller' => 'App\\Controller\\ApiController::getDoctorServices'], ['id'], ['GET' => 0], null, false, false, null]],
        222 => [[['_route' => 'app_admin_doctor_edit', '_controller' => 'App\\Controller\\AdminController::editDoctor'], ['id'], null, null, false, false, null]],
        252 => [[['_route' => 'app_admin_service_edit', '_controller' => 'App\\Controller\\AdminController::editService'], ['id'], null, null, false, false, null]],
        303 => [[['_route' => 'app_doctor_appointment_complete', '_controller' => 'App\\Controller\\DoctorController::completeAppointment'], ['id'], ['POST' => 0], null, false, false, null]],
        322 => [[['_route' => 'app_doctor_appointment_no_show', '_controller' => 'App\\Controller\\DoctorController::markNoShow'], ['id'], ['POST' => 0], null, false, false, null]],
        333 => [
            [['_route' => 'app_doctor_appointment_notes', '_controller' => 'App\\Controller\\DoctorController::updateNotes'], ['id'], ['POST' => 0], null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
