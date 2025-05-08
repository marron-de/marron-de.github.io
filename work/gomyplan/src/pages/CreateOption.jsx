import { useState } from "react";

// react-bootstrap
import Form from "react-bootstrap/Form";
import InputGroup from "react-bootstrap/InputGroup";

// component
import Header from "../components/Header";
import Footer from "../components/Footer";
import Nav from "../components/Nav";
import PageContainer from "../components/PageContainer";
import PageContent from "../components/PageContent";
import PageBtnbox from "../components/PageBtnbox";
import InputTitle from "../components/InputTitle";
import Input from "../components/Input";
import Select from "../components/Select";
import BigButton from "../components/BigButton";

const CreateOption = () => {
  const [city, setCity] = useState("");
  const [name, setName] = useState("");
  const [category, setCategory] = useState("");
  const [persons, setPersons] = useState("");
  const [time, setTime] = useState("");

  const isButtonDisabled = () => {
    // 버튼 활성화 여부를 결정
    return city === "" || name === "" || category === "";
  };

  return (
    <>
      {/* Header */}
      <Header type="title" title="Create Options" />

      {/* contents */}
      <PageContainer>
        <PageContent padding="LR">
          <Form className="formbox">
            <Form.Group className="formitem">
              <InputTitle className="input_title">Where are you traveling?</InputTitle>
              <InputGroup>
                <Select value={city} onChange={(e) => setCity(e.target.value)}>
                  <option value="">Select a city...</option>
                  <option value="seoul">Seoul</option>
                  <option value="seoul">Seoul</option>
                  <option value="busan">Busan</option>
                  <option value="new_york">New York</option>
                  <option value="los_angeles">Los Angeles</option>
                  <option value="tokyo">Tokyo</option>
                  <option value="osaka">Osaka</option>
                  <option value="beijing">Beijing</option>
                  <option value="shanghai">Shanghai</option>
                  <option value="paris">Paris</option>
                  <option value="lyon">Lyon</option>
                  <option value="berlin">Berlin</option>
                  <option value="munich">Munich</option>
                  <option value="london">London</option>
                  <option value="manchester">Manchester</option>
                  <option value="mumbai">Mumbai</option>
                  <option value="delhi">Delhi</option>
                  <option value="sao_paulo">Sao Paulo</option>
                  <option value="rio_de_janeiro">Rio de Janeiro</option>
                  <option value="sydney">Sydney</option>
                  <option value="melbourne">Melbourne</option>
                </Select>
              </InputGroup>
            </Form.Group>

            <Form.Group className="formitem">
              <InputTitle className="input_title">Option Name</InputTitle>
              <InputGroup>
                <Input placeholder="Please enter the option name." type="text" icon="write" value={name} onChange={(e) => setName(e.target.value)} />
              </InputGroup>
            </Form.Group>

            <Form.Group className="formitem">
              <InputTitle className="input_title">Passport Given Name</InputTitle>
              <InputGroup>
                <Select value={category} onChange={(e) => setCategory(e.target.value)}>
                  <option value="">Select a category...</option>
                  <option value="Category1">Category 1</option>
                  <option value="Category2">Category 2</option>
                  <option value="Category3">Category 3</option>
                  <option value="Category4">Category 4</option>
                  <option value="Category5">Category 5</option>
                  <option value="Category6">Category 6</option>
                  <option value="Category7">Category 7</option>
                  <option value="Category8">Category 8</option>
                </Select>
              </InputGroup>
            </Form.Group>

            <Form.Group className="formitem">
              <InputTitle className="input_title">Minimum Persons (Optional)</InputTitle>
              <InputGroup>
                <Select value={persons} onChange={(e) => setPersons(e.target.value)}>
                  <option value="Single (1)">Single (1)</option>
                  <option value="Couple (2)">Couple (2)</option>
                  <option value="Family (4)">Family (4)</option>
                  <option value="Group (10)">Group (10)</option>
                </Select>
              </InputGroup>
            </Form.Group>

            <Form.Group className="formitem">
              <InputTitle className="input_title">Time Required (Optional)</InputTitle>
              <InputGroup>
                <Select value={time} onChange={(e) => setTime(e.target.value)}>
                  <option value="">Time...</option>
                  <option value="30 minutes">30 minutes</option>
                  <option value="1 hour">1 hour</option>
                  <option value="2 hours">2 hours</option>
                  <option value="3 hours">3 hours</option>
                  <option value="4 hours">4 hours</option>
                  <option value="5 hours">5 hours</option>
                  <option value="Half day">Half day</option>
                  <option value="Full day">Full day</option>
                </Select>
              </InputGroup>
            </Form.Group>
          </Form>
        </PageContent>
        <PageBtnbox>
          <BigButton disabled={isButtonDisabled()}>Confirm</BigButton>
        </PageBtnbox>
      </PageContainer>

      {/* Footer */}
      <Footer />

      {/* Navigation */}
      <Nav/>
    </>
  );
};

export default CreateOption;
