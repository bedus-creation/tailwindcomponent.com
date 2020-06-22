<h1 class="text-gray-700 font-bold text-2xl md:text-3xl leading-snug"> 
Installation
</h1>

<hr class="border-t-2 border-b-0 border-gray-100 mt-2 mb-8">

<h2 class="font-bold mb-4 text-gray-700 text-xl">New Project</h2>

Laratail is a admin template rather than package. New project can create from github template. Steps to create new Project

1. Go to [Laratail Github](https://github.com/bedus-creation/laratail)
2. Click on Use templates
![](http://web2tailwind.com/storage/documents/KDZZDSD8Q2iSRKUEd9f99L9BJjZ4YQSbCPhniiPt.png)

Or Directly click here.

<div class="p-6 border rounded-t-lg text-center mt-16" style="font-family:Roboto">
    <a href="https://github.com/bedus-creation/laratail/generate" class="leading-tight bg-blue-600 hover:text-gray-100 text-gray-200 rounded px-6 py-3 text-sm">Create Project</a>
</div>

<h2 class="font-bold mb-4 text-gray-700 text-xl mt-16">Add Laratail on Existing Project</h2>

You can easily integrated laratail to your existing laravel application by merging these two projects.
To merge follow these steps
1. Go to your projects root 
2. Make new branch on git **laratail** (Optional but recommended)
```
git checkout -b laratail
```
3. Now pull laratail from master branch
```
git pull https://github.com/bedus-creation/laratail.git master 
```
4. If It says **“fatal: refusing to merge unrelated histories”**
```
git pull https://github.com/bedus-creation/laratail.git master --allow-unrelated-histories
```

<h2 class="font-bold mb-4 text-gray-700 text-xl">Update Laratail new Release</h2>

New release can easily updated from git pull as 
```
git pull https://github.com/bedus-creation/laratail.git master 
```
