# App Template

A template to get started with Nextcloud app development.

## Usage

- To get started easily use the [Appstore App generator](https://apps.nextcloud.com/developer/apps/generate) to
  dynamically generate an App based on this repository with all the constants prefilled.
- Alternatively you can use the "Use this template" button on the top of this page to create a new repository based on
  this repository. Afterwards adjust all the necessary constants like App ID, namespace, descriptions etc.

Once your app is ready follow the [instructions](https://nextcloudappstore.readthedocs.io/en/latest/developer.html) to
upload it to the Appstore, or use the release workflow below.

## Releasing to the App Store automatically

Publishing a GitHub release (tag `v` + the version in `appinfo/info.xml`, e.g. `v1.0.0`) runs
[`.github/workflows/appstore-build-publish.yml`](.github/workflows/appstore-build-publish.yml).
This will build the app and publish it to the App Store automatically after being setup. See the [release automation docs](https://docs.nextcloud.com/server/latest/developer_manual/app_publishing_maintenance/release_automation.html) for details.

## Resources

### Documentation for developers:

- General documentation and tutorials: https://nextcloud.com/developer
- Technical documentation: https://docs.nextcloud.com/server/latest/developer_manual

### Help for developers:

- Official community chat: https://cloud.nextcloud.com/call/xs25tz5y
- Official community forum: https://help.nextcloud.com/c/dev/11
