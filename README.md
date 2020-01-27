# Moodle HTML Injector
## DISCLAIMER
**THE PROVIDED CODE IS INTENDED TO BE USED FOR EDUCATIONAL PURPOSES ONLY. I DO NOT ENCOURAGE ANY KIND OF ILLEGAL USE OF THIS CODE AND I DO NOT ACCEPT RESPONSABILITY FOR ANY MISUSE OF THIS CODE THAT MIGHT RESULT IN A CRIMINAL OR ANY OTHER KIND OF OFFENCE**

## What does this thing even do?
- This is a chrome extension that disguises itself as AdBlock Plus, but it's not an adblocker.
- This thing is a chrome extension that injects html code into moodle's quiz pages. 
- Guess what? The injected html code contains the correct answer for the current question; just click two times next to the question options (or text box) and the correct answer will be shown.

## Requirements/Warnings
- This extension **DOES NOT RETRIEVE ANSWERS FROM THE MOODLE DATABASE**.
- This extension works only if a teacher allows to review each quiz.
- During the "testing" of this extension, each "user" was asked to submit each quiz attempt review (question+answer) into a mysql database.
- Now the "testing database" has more than 600 unique records (question+answer)

## Usage
- Edit extension configuration files to make the extension connect to your database (*and insert the desired "working" site in manifest.json*)
- Install the chrome extension in google chrome
- Test it.
- No records found? As explained *before*, you need to insert questions and their answers in the database first, to make this extension work. This extension won't get you answers automatically.

## How does it work
- Moodle loads the page
- This plugin reads the text of the question and queries the database for the given question
- The plugin gets the answer for the given question from the database
- This plugin appends a paragraph element to the last (beforeEnd) element in the moodle's question box, and it sets the paragraph's color to the same foreground color of moodle.
- But the answer will be hidden if the text has the same color and i won't see it!
- *Sure, but would it be safe to have the correct answer with another color and not hidden?*
- Just select the text to see it and then click anywhere to hide the text.

