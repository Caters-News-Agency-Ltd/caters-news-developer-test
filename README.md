# Caters News Developer Test

This repository is a barebones Laravel application used to assess applicants as part of the Caters News developer hiring process. It is intentionally minimal and provides just enough scaffolding for you to demonstrate how you approach a real-world task.

## Getting Started

To take part in this test, fork this repository to your own GitHub account and configure it to run in your local development environment.

For simplicity, you're encouraged to keep the setup lightweight:

- Use **SQLite** as your database to avoid the need to install and configure a separate database server.
- Run the application locally with `php artisan serve`.

Beyond installing dependencies via Composer and setting up your `.env` file, minimal configuration should be required to get the application running.

## The Task

The test is split into two phases.

### Phase One

You will need to retrieve data from an external API that requires authentication. The endpoint to use is:

```
https://clipsadmin.catersnews.com/api/test/listVideos
```

A token for the endpoint will be provided to you separately when you undertake the task.

You are expected to build a way to:

- Authenticate requests to the endpoint.
- Loop through and retrieve all available data from the endpoint.
- Store the retrieved data against the `Video` model.

Your implementation should guard against pre-existing data being duplicated or overwritten on subsequent runs.

### Phase Two

Using the [Laravel AI SDK](https://laravel.com/docs/ai), you will build a simple AI agent that analyses the videos stored in phase one and recommends the most appropriate ones to a list of customers.

Before starting this phase, you will need to seed the `Customer` model with some sample data for the agent to make recommendations against.

A Gemini API key will be provided to you for testing during this phase. This key will be revoked after the session, so it should not be relied upon beyond that point.

## Submission

Once complete, please share a link to your public fork so your solution can be reviewed. After your in-person session, please push the changes you have made to the fork.

Please also include a dump of the results produced by the AI's recommendations, stored as a `.txt`, `.json` or similar file, so that their accuracy can be validated.
