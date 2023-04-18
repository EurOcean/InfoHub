<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DocsController;
use App\Http\Controllers\ApiDocsController;
use App\Http\Controllers\SitemapController;
use App\Http\Controllers\XMLController;
use App\Http\Controllers\Auth\LogoutController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// HOME -- posiblemente para borrar...
Route::get('/home', [HomeController::class, 'index'])->name('home');

// DOCS SCHEMA JSON+LD
Route::get('/', [DocsController::class, 'index'])->name('docs');
Route::get('/documentation/schema-project', [DocsController::class, 'schemaProject'])->name('schemaProject');
Route::get('/documentation/schema-vessels', [DocsController::class, 'schemaVessels'])->name('schemaVessels');
Route::get('/documentation/schema-organization', [DocsController::class, 'schemaOrganization'])->name('schemaOrganization');
Route::get('/documentation/schema-project-with-owners', [DocsController::class, 'schemaProjectWithOwners'])->name('schemaProjectWithOwners');
Route::get('/documentation/schema-sitemap', [DocsController::class, 'schemaSitemap'])->name('schemaSitemap');

// GENERATING SITEMAPS
Route::get('sitemap.xml', [XMLController::class, 'index']);
Route::get('sitemap/projects', [XMLController::class, 'projects']);
Route::get('sitemap/vessels', [XMLController::class, 'vessels']);
Route::get('sitemap/organizations', [XMLController::class, 'organizations']);

// SITEMAP VIEWS DETAILS
Route::get('projects', [SitemapController::class, 'projectsList'])->name('projectsList');
Route::get('search-projects', [SitemapController::class, 'searchProjects'])->name('searchProjects');
Route::get('project/{id}', [SitemapController::class, 'projectDetail'])->name('projectDetail');
Route::put('project/{id}/edit', [SitemapController::class, 'projectOrganizationUpdate'])->name('projectOrganizationUpdate');
Route::get('project-get-organizations', [SitemapController::class, 'getOrganizations'])->name('getOrganizations');

Route::get('vessels', [SitemapController::class, 'vesselsList'])->name('vesselsList');
Route::get('search-vessels', [SitemapController::class, 'searchVessels'])->name('searchVessels');
Route::get('vessel/{id_infrastructure}', [SitemapController::class, 'vesselDetail'])->name('vesselDetail');
Route::put('vessel/{id}/edit', [SitemapController::class, 'vesselDetailUpdate'])->name('vesselDetailUpdate');
Route::get('organizations', [SitemapController::class, 'organizationsList'])->name('organizationsList');
Route::get('search-organizations', [SitemapController::class, 'searchOrganizations'])->name('searchOrganizations');
Route::get('organization/{id}', [SitemapController::class, 'organizationDetail'])->name('organizationDetail');

// API DOCS
Route::get('/api-documentation', [ApiDocsController::class, 'index'])->name('apiDocumentation');

// AUTH
// Auth::routes();
// Route::post("/logout",[LogoutController::class, 'store'])->name("logout");
