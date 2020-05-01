Public Class Form1
    Private Sub Form1_Load(sender As Object, e As EventArgs) Handles MyBase.Load

    End Sub

    Private Sub btnToevoegen_Click(sender As Object, e As EventArgs) Handles btnToevoegen.Click
        Dim x As New MYSQLGenerator.MySqlGenerator("localhost", "root", "usbw", "project3", "3307")

        Dim y As String
        Dim z As Integer

        y = txtnaam.Text
        z = txtCode.Text

        x.Query("insert into klant(naam , code) values ( ?, ?)", New List(Of Object)({y, z}))

    End Sub

    Private Sub Button1_Click(sender As Object, e As EventArgs) Handles Button1.Click

        Dim x As New MYSQLGenerator.MySqlGenerator("localhost", "root", "usbw", "project3", "3307")


        Dim o As String

        o = txtbroodnaam.Text


        x.Query("insert into broodtype(broodnaam) values ( ?, ?)", New List(Of Object)({o}))

    End Sub
End Class
