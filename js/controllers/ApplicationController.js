var application = angular.module('iJobs', [
		'ui.router'
	]);

// Load foundation on every new page load
application.run(function($rootScope, $timeout)	{
	$rootScope.$on('$viewContentLoaded', function()	{
		$timeout(function()	{
			$(document).foundation();
		}, 500);
	})
});

/**
 * Configuration for routes
 */
application.config(function($stateProvider, $urlRouterProvider){

	// Set default page to login
	$urlRouterProvider.otherwise('/');

	// Define states
	$stateProvider

	// Login page
	.state('login', {
	    url: '/',
	    templateUrl: './views/login/index.html',
	    controller: 'LoginController'
	})
	// Home page
	.state('home', {
	    url: '/home',
	    abstract: true,
	    templateUrl: './views/home/index.html',
	    controller: 'HomeController'
	})
	// Dashboard
	.state('home.dashboard', {
	    url: '',
	    templateUrl: './views/home/dashboard.html',
	    controller: 'DashboardController'
	})
    // Import
	.state('home.import', {
	    url: '/import',
	    templateUrl: './views/home/import.html',
	    controller: 'ImportController'
	})
    // Settings
	.state('home.settings', {
	    url: '/settings',
	    templateUrl: './views/home/settings.html',
	    controller: 'SettingsController'
	})
    // Plugin management
	.state('home.plugin-management', {
	    url: '/plugin-management',
	    templateUrl: './views/home/pluginManagement.html',
	    controller: 'PluginManagementController'
	})
    // Profile
	.state('home.profile', {
	    url: '/profile',
	    templateUrl: './views/home/profile.html',
	    controller: 'ProfileController'
	});
});
