greece2012
==========

This is a starting attempt to learn git hub

When you start make sure you pull first before you push.

DELETE:

git rm -r one-of-the-directories     
git commit -m "Remove duplicated directory"    
git push origin master    



If you have committed junk but not pushed,
git reset --soft HEAD~1

HEAD~1 is a shorthand for the commit before head. Alternatively you can refer to the SHA-1 of the hash you want to reset to. --soft option will delete the commit but it will leave all your changed files "Changes to be committed", as git status would put it.

If you want to get rid of any changes to tracked files in the working tree since the commit before head use --hard instead.

Now if you already pushed and someone pulled which is usually my case, you can't use git reset. You can however do a git revert,

git revert HEAD
This will create a new commit that reverses everything introduced by the accidental commit.


Sometimes you may want to undo a whole commit with all changes. Instead of going through all the changes manually, you can simply tell git to revert a commit, which does not even have to be the last one. Reverting a commit means to create a new commit that undoes all changes that were made in the bad commit. Just like above, the bad commit remains there, but it no longer affects the the current master and any future commits on top of it.

$ git revert dd61ab32


http://christoph.ruegg.name/blog/2010/5/5/git-howto-revert-a-commit-already-pushed-to-a-remote-reposit.html

http://git-scm.com/book/en/Git-Basics-Tips-and-Tricks

Case 1: Delete the last commit:

$ git push greece2012 +dd61ab32^:master

$ git reset HEAD^ --hard
$ git push mathnet -f

Case 2: Delete the second last commit

$ git rebase -i dd61ab32^

$ git push greece2012 -f