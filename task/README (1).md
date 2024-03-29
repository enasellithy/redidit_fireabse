<p align="center">
Daldart
</p>

# Description

Hey there! Welcome to Daldart  assignment.

This assignment is very simple. We will require you to create an app that requests and store data in firebase than displays the `hot`, `new` and `raising` lists of the `/r/FlutterDev` subreddit.

We will provide you with a `figma` file below where you can find the necessary designs.

## What we expect from you

1. The code is clean and follow modern patterns.
2. The code is well tested, you can decide to do `unit` tests, `integration` tests, or `both`.
3. The UI is simple. Animations are a plus.
4. Commits and MRs are clear.

//https://api.themoviedb.org/3/discover/movie?language=en-US&api_key=db456e2314b333719aaf25c1c9eb11fc
//https://api.themoviedb.org/3/discover/movie?page=1&language=en-US&api_key=db456e2314b333719aaf25c1c9eb11fc

## Instructions

  1. `Create` a repository on your git provider and push the cloned repo as it is. 
2. **DO NOT MAKE ANY CHANGES TO THE REPO YET**
  2. After each of the tasks below, you will create a Merge Request with description on what you did and the reasoning for the decisions you took.
  3. In the end we expect to have 2 MRs on the repository, make sure that MR #2 targets MR #1, so that the diff is clean.
  4. If you have any question, send us a message.
  5. When you are done, invite the `hiring managers` as contributors to the repo. Their emails should have been sent to you already, but if they were not, please send us a message.

## Task #1

Add the logic for `requesting` and `storing` data from Reddit's API. 
Keep in mind you should add a way to request the next page as well,
since it will be needed for the [Task #2](#task-2).

You can see the documentation at [https://www.reddit.com/dev/api/](https://www.reddit.com/dev/api/), 
make sure you are calling the correct api for the `/r/FlutterDev` subreddit.

If you decide (or not) to use a state management library, please provide a reasoning for your choice.

When you are happy with the result, open an MR just like you would when working normally.

## Task #2

Sotre tha data in firebase

## Task #3
Implement the UI for the app. 

Keep in mind the list on the screen is an `infinite loading` list, so make sure that works.

Pay close attention to the sizes, colors and spacings.

Clicking on a card should `open the url` of the post.

When you are happy with the UI, create another MR that targets MR #1.


<img src="https://github.com/Lepaya/flutter_assignment/raw/main/expected_result.png" width="320">

## Final

Invite the Abdallah@daldart.com  as contributors to the repo. Their emails should have been sent to you already, but if they were not, please send us a message.
