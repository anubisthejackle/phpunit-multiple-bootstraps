# PHPUnit Multi-Bootstrap
A PHP Unit plugin that allows you to load TestSuite specific bootstraps.

## How to Use
To add a new bootstrap to a Test Suite, we attach it to our class like so:

```xml
<listeners>
    <listener class="Anubisthejackle\PHPUnit\Bootstrap\TestListener">
        <arguments>
            <string>integration</string>
            <file>tests/bootstraps/integration-bootstrap.php</file>
        </arguments>
    </listener>
</listeners>
```

Where the first argument is the name of the Test Suite that we want this bootstrap loaded prior to, and the file is the relative location of our bootstrap file. This configuration is added to our `phpunit.xml` configuration.

*NOTE: If you intend to combine Unit tests and Integration tests into a single XML file, you will need to run some of your tests in process isolation. You may need to use some combination of process isolation and disabling global backups to make this work.*