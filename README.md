# DocRaptor Swagger

Repeatable process for generating DocRaptor API clients using the latest development version of Swagger.

*WARNING*: The generated libraries currently make requests against https://smoke.docraptor.com, not production!

## Setup

```sh
script/setup
```

## Build & Try with Language X

```sh
script/ruby
script/python
script/java
script/csharp
script/php
script/node
```

## Scratchlist of Issues
While we're still sorting out the basics here's a list of crazy things
- java does not have file deserialization support
- add version numbers to our clients
- node is using a non-standard generator because we couldn't easily get the standard dynamic one working

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
