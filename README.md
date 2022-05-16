# php-apache2-aws-codepipeline
Step:
    1. Create a role for ec2 instance from AWS IAM service attaching the following policy "AmazonEC2RoleforAWSCodeDeploy"
    2. Create another role for CodeDeploy attaching "AWSCodeDeployRole" policy
    3. Launch an aws ec2 instance attaching first role you have created
    4. Create an application from CodeDeploy AWS services connect with you github repo while creating
    5. Create an application from CodePipeline and attach your ec2 instance while creating
    6. Run the CodeDeploy Application which will read appsepc.yml and take the actions.