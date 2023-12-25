# Contribution Guidelines
This project released with a [Contributor Code of Conduct](CODE_OF_CONDUCT.md).
<br/>
<br/>

## Folder Structure
This project use Laravel Framework 10, you can follow the Laravel Rule for contribute in this project. [Laravel Directory Structure](https://laravel.com/docs/10.x/structure) 
<br/>
<br/>

## Adding something to this Road Map

If you have something module to contribute to an roadmap, this is how you do it.

you will need a [Github Account](https://github.com/join)!
and create your [**Pull Request**](https://docs.github.com/en/pull-requests/collaborating-with-pull-requests/proposing-changes-to-your-work-with-pull-requests/about-pull-requests)
<br/>
<br/>

### Code Contributions
1. Fork this repository on Github
2. Clone your Repository have been forked
3. Update some Content/Codes
4. Push to your repository have been forked
5. create `pull request`  and the target will assign to main repo.
<br/>
<br/>

### Update your repo
Before update your repo have been forked, you need to update with `main` branch from [main repo](https://github.com/syifakamin/iTrashBank). 
Follow this step to update your local repo
<br/>
<br/>
```clis
$ git remote add upstream git@github.com:syifakamin/iTrashBank.git
$ git fetch upstream
$ git rebase upstream/main
$ git push origin main --force
```

<br/>
<br/>

### Add new
you can put a status like `feature` and `hotfix`. on your branch name

```cli
//create new branch
$ git checkout -b feature/[category][update-name]
```
***branch name***
- Category : Model, View, Controller, Create, Read, Update, Delete, or Other
- see [Folder Structure](#folder-structure)

### Update or Fix

```bash
//Update Or Hotfix
$ git checkout -b hotfix/[category][update-name]
```

<br/>
<br/>

### push

after, finish your branch, you update, you can push to your local repo and make **Pull Request**.
but, make sure your branch is [updated](#update-your-repo) from [main repo](https://github.com/syifakamin/iTrashBank).
Go to project page, and click **pull request**
