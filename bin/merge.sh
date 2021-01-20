echo "/public/dist" >> .gitignore
echo "/public/mix-manifest.json" >> .gitignore

git rm -r --cache .
git add . && git commit -m "- [x] Preparing for merge."
git merge develop
