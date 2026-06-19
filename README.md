# WP AI Chatbot

A modern, extensible WordPress AI Chatbot plugin built with an object-oriented architecture and provider-based AI integration. The plugin displays a customer support chatbot widget on the frontend and allows administrators to configure different AI providers from the WordPress admin panel without modifying code.

## Features

* Object-Oriented Plugin Architecture
* Clean Folder Structure
* WordPress Settings API Integration
* AJAX-Based Chat Communication
* Dynamic AI Provider Selection
* Gemini AI Support
* OpenAI Support Ready
* Claude AI Support Ready
* Configurable API URL
* Configurable AI Model
* Custom System Prompt
* Frontend Chat Widget
* WordPress Coding Standards
* Easy to Extend with Additional AI Providers

## Plugin Architecture

```text
wp-ai-chatbot/
│
├── assets/
│   ├── css/
│   └── js/
│
├── includes/
│   ├── admin/
│   ├── frontend/
│   ├── services/
│   └── helpers/
│
├── templates/
│
├── wp-ai-chatbot.php
├── uninstall.php
└── readme.md
```

## Architecture Overview

The plugin follows a service-based architecture to separate responsibilities and improve maintainability.

### Admin Layer

Responsible for:

* Plugin settings page
* API configuration
* Provider selection
* System prompt management

### Frontend Layer

Responsible for:

* Chat widget rendering
* AJAX requests
* User interaction
* Frontend assets

### Service Layer

Responsible for:

* AI provider integrations
* API communication
* Response processing

## Supported AI Providers

### Gemini AI

Example Configuration

Provider:
Gemini

API URL:
https://generativelanguage.googleapis.com/v1beta/models/gemini-1.5-flash:generateContent

Model:
gemini-1.5-flash

### OpenAI

Example Configuration

Provider:
OpenAI

API URL:
https://api.openai.com/v1/chat/completions

Model:
gpt-4o-mini

### Claude AI

Example Configuration

Provider:
Claude

API URL:
https://api.anthropic.com/v1/messages

Model:
claude-sonnet-4

## Dynamic Provider System

The plugin uses a Provider Factory pattern.

```php
$provider = WPAI_Provider_Factory::make();
$response = $provider->generate_response($message);
```

This allows switching between AI providers without modifying business logic.

## Installation

1. Clone the repository.

```bash
git clone https://github.com/darshan-patel-1993/wordpress-ai-chatbot-plugin.git
```

2. Upload the plugin to:

```text
wp-content/plugins/
```

3. Activate the plugin from WordPress Admin.

4. Navigate to:

```text
Settings → WP AI Chatbot
```

5. Configure:

* AI Provider
* API Key
* API URL
* Model
* System Prompt

6. Save settings.

7. Visit the frontend and start chatting.


## Security Features

* Nonce Validation
* Input Sanitization
* Escaped Output
* WordPress AJAX API
* Secure API Storage
* Option Validation

## Development Highlights

This project demonstrates:

* WordPress Plugin Development
* PHP OOP
* Service Layer Architecture
* Factory Design Pattern
* AJAX Integration
* REST API Communication
* Dynamic Configuration Management
* Extensible Codebase Design

## Technologies Used

* WordPress
* PHP
* JavaScript
* AJAX
* CSS
* REST APIs
* Gemini AI
* OpenAI
* Claude AI

## License

GPL v2 or later

## Author

Darshan Patel

Sr Website Developer

Specializing in custom WordPress development, plugin development, API integrations, AI-powered solutions, and Laravel applications.
