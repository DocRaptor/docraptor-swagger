# DocRaptor Swagger

This repo is for keeping the [swagger config](docraptor.yaml) and [scripts](script/) which we use to generate client libraries in many languages. You should only need to modify this repo if you're changing the api, or options for generating swagger clients.

## Development and Release

If you make changes to `docraptor.yaml` you may need to update the info/version near the top of the file. This describes the server API version. For instance, if you add a new non-breaking API parameter then you'll want to increment the minor version. This will cause version numbers to change in some of the individual repos as well so you'll want to keep those changes.

If you make changes to `docraptor.yaml` or something in `script/`, you probably will want to synchronize that change to all the language repos. Do the following for each of the repos.

1. Run `script/update_from_upstream`
2. Run `script/generate_language <language>`
3. Inspect changes and modify examples, readme, tests, etc.
4. Commit and push to GitHub
5. Follow release instructions for that repo.

## Things we might do to/for Swagger
* Add naming convention descriptions to all config helps
* Document how to setup/run all the different languages for newbies like us
* make project like this for easy bootstrapping of client libraries
* document best practices
* HMAC verification
* idempotentency requests headers
* gzip
* ssl certificate inclusion
* add debug to all client libraries we use
* improve swagger ui, it gets odd cache issues
* ruby server generator
* better usage of nested params (fix issue causing definitions to be used)
