sed -i '/public\/dist/d' .gitignore
sed -i '/public\/mix-manifest.json/d' .gitignore

git rm -r --cache .
yarn prod
git add . && git commit -m "- [x] Production built."
